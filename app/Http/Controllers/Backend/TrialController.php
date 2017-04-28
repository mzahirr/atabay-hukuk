<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\PermissionsDataTable;
use App\Http\Models\Backend\Permission;
use App\Http\Requests\Backend\PermissionStore;
use App\Http\Requests\Backend\PermissionUpdate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param PermissionsDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(PermissionsDataTable $dataTable)
    {
        return $dataTable->render('backend.permission.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PermissionStore|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionStore $request)
    {
        Permission::create($request->only('label'));

        return back()->withNotify('İzin Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Permission $permission
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Permission $permission)
    {
        return view('backend.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PermissionUpdate|Request $request
     * @param Permission $permission
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(PermissionUpdate $request, Permission $permission)
    {
        $permission->update($request->only('label'));

        return back()->withNotify('İzin Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return back()->withNotify('İzin Silindi!');
    }
}
