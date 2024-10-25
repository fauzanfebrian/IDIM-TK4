<?php

namespace App\DataTables;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class DashboardDataTable extends DataTable
{
    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('dashboard-table')
            ->minifiedAjax()
            ->dom('B')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('reload')
            ])
            ->columns($this->getColumns());
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('IdBarang'),
            Column::make('NamaBarang'),
            Column::make('HargaBeli')->title('Harga Beli (Satuan)'),
            Column::make('HargaJual')->title('Harga Jual (Satuan)'),
            Column::make('JumlahPenjualan'),
            Column::make('StockTersedia'),
            Column::make('LabaRugi'),
        ];
    }

    public function ajax(): JsonResponse
    {
        $rawData = DB::select("
            SELECT
                Barang.IdBarang,
                Barang.NamaBarang,
                COALESCE(TotalPembelian.HargaBeli, 0) AS HargaBeli,
                COALESCE(TotalPenjualan.HargaJual, 0) AS HargaJual,
                COALESCE(TotalPenjualan.JumlahPenjualan, 0) AS JumlahPenjualan,
                COALESCE(TotalPembelian.JumlahPembelian, 0) - COALESCE(TotalPenjualan.JumlahPenjualan, 0) AS StockTersedia,
                (COALESCE(TotalPenjualan.HargaJual, 0) - COALESCE(TotalPembelian.HargaBeli, 0)) * TotalPenjualan.JumlahPenjualan AS LabaRugi
            FROM Barang
            LEFT JOIN (
                SELECT
                    IdBarang,
                    FLOOR(AVG(HargaBeli)) AS HargaBeli,
                    SUM(JumlahPembelian) AS JumlahPembelian
                FROM Pembelian
                GROUP BY IdBarang
            ) AS TotalPembelian ON Barang.IdBarang = TotalPembelian.IdBarang
            LEFT JOIN (
                SELECT
                    IdBarang,
                    FLOOR(AVG(HargaJual)) AS HargaJual,
                    SUM(JumlahPenjualan) AS JumlahPenjualan
                FROM Penjualan
                GROUP BY IdBarang
            ) AS TotalPenjualan ON Barang.IdBarang = TotalPenjualan.IdBarang
        ");

        $data = collect($rawData);

        $dataTable = DataTables::of($data);

        if (is_callable($this->beforeCallback)) {
            app()->call($this->beforeCallback, compact('dataTable'));
        }

        if (is_callable($this->responseCallback)) {
            $data = new Collection($dataTable->toArray());

            $response = app()->call($this->responseCallback, compact('data'));

            return new JsonResponse($response);
        }

        return $dataTable->toJson();
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Dashboard_' . date('YmdHis');
    }
}
