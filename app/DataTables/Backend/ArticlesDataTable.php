<?php

namespace App\DataTables\Backend;

use App\Http\Models\Backend\Article;
use Yajra\Datatables\Services\DataTable;

class ArticlesDataTable extends DataTable
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
            ->editColumn('created_at', function ($article) {
                return $article->created_at->format('d.m.Y H:i');
            })
            ->editColumn('updated_at', function ($article) {
                return $article->updated_at->diffForHumans();
            })
            ->addColumn('article', function (Article $article) {
                return $article->translations->map(function ($translation) {
                    return str_limit($translation->subject, 30, '...');
                })->implode('<br>');
            })
            ->addColumn('action', function ($article) {
                return view('backend.partials.articlebuttons', compact('article'));
            })
            ->rawColumns(['article', 'action']);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $query = Article::with('translations', 'user')->select('articles.*');

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
            ->ajax(route('articles.index'))
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
            ["data" => "article", "name" => "updated_at", "title" => "Başlık"],
            ["data" => "user.name", "name" => "updated_at", "title" => "Yazar/Düzenleyen"],
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
        return 'articles_' . time();
    }
}