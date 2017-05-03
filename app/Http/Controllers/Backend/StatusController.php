<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\StatusesDataTable;
use App\Http\Models\Backend\Status;
use App\Http\Requests\Backend\StatusStore;
use App\Http\Requests\Backend\StatusUpdate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param \App\DataTables\Backend\StatusesDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     * @internal param $v
     *
     */
    public function index(StatusesDataTable $dataTable)
    {
        return $dataTable->render('backend.status.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StatusStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StatusStore $request)
    {
        Status::create($request->only('label'));

        return back()->withNotify('Durum Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Status $status
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('backend.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StatusUpdate $request
     * @param Status $status
     *
     * @return \Illuminate\Http\Response
     */
    public function update(StatusUpdate $request, Status $status)
    {
        $status->update($request->only('label'));

        return back()->withNotify('Durum Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Status $status
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Status $status)
    {
        $status->delete();

        return back()->withNotify('Durum Silindi!');
    }
}
