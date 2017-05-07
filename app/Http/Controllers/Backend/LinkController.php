<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\LinksDataTable;
use App\Http\Models\Backend\Link;
use App\Http\Requests\Backend\LinkStore;
use App\Http\Requests\Backend\LinkUpdate;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param LinksDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(LinksDataTable $dataTable)
    {
        return $dataTable->render('backend.link.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LinkStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LinkStore $request)
    {
        Link::create($request->only('name', 'url'));

        return back()->withNotify('Bağlantı Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Link $link)
    {
        return view('backend.link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param LinkUpdate $request
     * @param Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function update(LinkUpdate $request, Link $link)
    {
        $link->update($request->only('name', 'url'));

        return back()->withNotify('Bağlantı Güncellendi! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Link $link
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return back()->withNotify('Bağlantı Silindi! ');
    }
}
