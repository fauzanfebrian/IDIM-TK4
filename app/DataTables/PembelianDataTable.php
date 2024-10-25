<?php

namespace App\DataTables;

use App\Models\Pembelian;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PembelianDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'pembelian.action')
            ->editColumn('NamaPengguna', function (Pembelian $pembelian) {
                return $pembelian->pengguna->NamaPengguna;
            })
            ->editColumn('NamaBarang', function (Pembelian $pembelian) {
                return $pembelian->barang->NamaBarang;
            })
            ->setRowId('IdPembelian');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Pembelian $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('pembelian-table')
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
            Column::make('IdPembelian'),
            Column::make('JumlahPembelian'),
            Column::make('HargaBeli')->title('Harga Beli (Satuan)'),
            Column::computed('NamaBarang'),
            Column::computed('NamaPengguna'),
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
        return 'Pembelian_' . date('YmdHis');
    }
}
