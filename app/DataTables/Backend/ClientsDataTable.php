<?php

namespace App\DataTables\Backend;

use App\Http\Models\Backend\Client;
use Yajra\Datatables\Services\DataTable;

class ClientsDataTable extends DataTable
{
    /**
     * @var array
     */
    protected $exportColumns = ['name', 'email', 'created_at', 'updated_at'];
    /**
     * @var array
     */
    protected $printColumns = ['name', 'email', 'created_at', 'updated_at'];

    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('created_at', function ($client) {
                return $client->created_at->format('d.m.Y H:i');
            })
            ->editColumn('updated_at', function ($client) {
                return $client->updated_at->diffForHumans();
            })
            ->addColumn('action', function ($client) {
                return view('backend.partials.clientbuttons', compact('client'));
            });
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Client::query();

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
            ->ajax(route('clients.index'))
            ->addAction(["data" => "action", "name" => "action", "title" => "İşlemler", 'width' => '25%'])
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
            ["data" => "identity", "name" => "identity", "title" => "Kimlik No"],
            ["data" => "name", "name" => "name", "title" => "Ad"],
            ["data" => "email", "name" => "email", "title" => "E-Posta"],
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
        return 'clients_' . time();
    }
}
