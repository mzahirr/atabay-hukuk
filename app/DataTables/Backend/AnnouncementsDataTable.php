<?php

namespace App\DataTables\Backend;

use App\Http\Models\Backend\Announcement;
use Yajra\Datatables\Services\DataTable;

class AnnouncementsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @return \Yajra\Datatables\Engines\BaseEngine
     */
    public function dataTable()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->editColumn('created_at', function ($announcement) {
                return $announcement->created_at->format('d.m.Y H:i');
            })
            ->editColumn('updated_at', function ($announcement) {
                return $announcement->updated_at->diffForHumans();
            })
            ->addColumn('announcement', function (Announcement $announcement) {
                return $announcement->translations->map(function ($translation) {
                    return str_limit($translation->announcement, 30, '...');
                })->implode('<br>');
            })
            ->addColumn('action', function ($announcement) {
                return view('backend.partials.announcementbuttons', compact('announcement'));
            })
            ->rawColumns(['announcement', 'action']);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Announcement::with('translations')->select('announcements.*');

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
            ->ajax(route('announcements.index'))
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
            ["data" => "announcement", "name" => "updated_at", "title" => "Duyuru"],
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
        return 'announcements_' . time();
    }
}
