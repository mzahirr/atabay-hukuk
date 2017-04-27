<?php

namespace App\DataTables\Backend;

use App\Http\Models\Backend\Role;
use Yajra\Datatables\Services\DataTable;

class RolesDataTable extends DataTable
{
    /**
     * @var array
     */
    protected $exportColumns = ['name', 'label', 'created_at', 'updated_at'];
    /**
     * @var array
     */
    protected $printColumns = ['name', 'label', 'created_at', 'updated_at'];

    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('created_at', function ($role) {
                return $role->created_at->format('d.m.Y H:i');
            })
            ->editColumn('updated_at', function ($role) {
                return $role->updated_at->diffForHumans();
            })
            ->addColumn('action', function ($role) {
                return view('backend.partials.rolebuttons', compact('role'));
            });
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Role::query();

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
            ->ajax(route('role.index'))
            ->addAction(["data" => "action", "name" => "action", "title" => "Action", 'width' => '25%'])
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
            ["data" => "label", "name" => "label", "title" => "Label"],
            ["data" => "name", "name" => "name", "title" => "Name"],
            ["data" => "created_at", "name" => "created_at", "title" => "Created At"],
            [
                "data" => "updated_at",
                "name" => "updated_at",
                "title" => "Updated At",
                "orderable" => false,
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
            'dom' => 'lBftip',
            'buttons' => ['export', 'print', 'reset', 'reload'],
            'lengthMenu' => [
                [10, 25, 50, 100, -1],
                ['10', '25', '50', '100', 'All'],
            ],
            'order' => [[0, 'desc']],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'roles_' . time();
    }
}
