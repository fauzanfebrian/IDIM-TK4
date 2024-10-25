<?php

namespace App\DataTables;

use App\Models\Penjualan;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PenjualanDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'penjualan.action')
            ->editColumn('NamaPengguna', function (Penjualan $penjualan) {
                return $penjualan->pengguna->NamaPengguna;
            })
            ->editColumn('NamaBarang', function (Penjualan $penjualan) {
                return $penjualan->barang->NamaBarang;
            })
            ->editColumn('NamaPelanggan', function (Penjualan $penjualan) {
                return $penjualan->pelanggan->NamaPelanggan;
            })
            ->setRowId('IdPenjualan');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Penjualan $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('penjualan-table')
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('add'),
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
            Column::make('IdPenjualan'),
            Column::make('JumlahPenjualan'),
            Column::make('HargaJual')->title('Harga Jual (Satuan)'),
            Column::computed('NamaBarang'),
            Column::computed('NamaPengguna'),
            Column::computed('NamaPelanggan'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Penjualan_' . date('YmdHis');
    }
}
