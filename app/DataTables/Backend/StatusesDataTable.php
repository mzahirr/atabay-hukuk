<?php

namespace App\DataTables\Backend;

use App\Http\Models\Backend\Permission;
use App\Http\Models\Backend\Status;
use Yajra\Datatables\Services\DataTable;

class StatusesDataTable extends DataTable
{
    /**
     * @var array
     */
    protected $exportColumns = ['label', 'created_at', 'updated_at'];
    /**
     * @var array
     */
    protected $printColumns = ['label', 'created_at', 'updated_at'];

    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('created_at', function ($status) {
                return $status->created_at->format('d.m.Y H:i');
            })
            ->editColumn('updated_at', function ($status) {
                return $status->updated_at->diffForHumans();
            })
            ->addColumn('action', function ($status) {
                return view('backend.partials.statusbuttons', compact('status'));
            });
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Status::query();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->ajax(route('statuses.index'))
            ->addAction(["data" => "action", "name" => "action", "title" => "İşlemler", 'width' => '15%'])
            ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ["data" => "label", "name" => "label", "title" => "Durum adı"],
            ["data" => "created_at", "name" => "created_at", "title" => "Oluşturulma"],
            [
                "data"       => "updated_at",
                "name"       => "updated_at",
                "title"      => "Güncellenme",
                "orderable"  => false,
                "searchable" => false,
            ],
        ];
    }

    /**
     * @return array
     */
    public function getBuilderParameters()
    {
        return [
            'dom'        => 'lBftip',
            'buttons'    => ['export', 'print', 'reset', 'reload'],
            'lengthMenu' => [
                [10, 25, 50, 100, -1],
                ['10', '25', '50', '100', 'All'],
            ],
            'order'      => [[0, 'desc']],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'statuses_' . time();
    }
}
