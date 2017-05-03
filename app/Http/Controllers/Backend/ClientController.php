<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ClientsDataTable;
use App\Http\Models\Backend\Client;
use App\Http\Requests\Backend\ClientStore;
use App\Http\Requests\Backend\ClientUpdate;
use App\Http\Controllers\Controller;

/**
 * Class ClientController
 * @package App\Http\Controllers\Backend
 */
class ClientController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param ClientsDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(ClientsDataTable $dataTable)
    {
        return $dataTable->render('backend.client.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.client.create');
    }

    /**
     * @param Client $client
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Client $client)
    {
        return view('backend.client.authorize', compact('client'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param ClientStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStore $request)
    {
        Client::create($request->only('identity', 'name', 'email', 'password', 'number'));

        return back()->withNotify('Müvekkil Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Client $client)
    {
        return view('backend.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ClientUpdate $request
     * @param Client $client
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(ClientUpdate $request, Client $client)
    {
        if ($request->has('password')) {
            $client->update($request->only('identity', 'name', 'email', 'password', 'number'));
        } else {
            $client->update($request->only('identity', 'name', 'email', 'number'));
        }

        return back()->withNotify('Müvekkil Düzenlendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return back()->withNotify('Müvekkil Silindi!');
    }

    /**
     * @param Client $client
     *
     * @return mixed
     */
    public function authorizeclients(Client $client)
    {
        return back()->withNotify('Yetkilendirme Başarılı.');
    }
}
