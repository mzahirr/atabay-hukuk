<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\RolesDataTable;
use App\Http\Models\Backend\Permission;
use App\Http\Models\Backend\Role;
use App\Http\Requests\Backend\RoleStore;
use App\Http\Requests\Backend\RoleUpdate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param RolesDataTable $dataTable
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(RolesDataTable $dataTable)
    {
        return $dataTable->render('backend.role.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RoleStore|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStore $request)
    {
        Role::create($request->only('label'));
        return back()->withNotify('Role Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Role $role)
    {
        $permissions = Permission::all();
        return view('backend.role.authorize', compact('role', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Role $role)
    {
        return view('backend.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoleUpdate|Request $request
     * @param Role $role
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(RoleUpdate $request, Role $role)
    {
        $role->update($request->only('label'));
        return back()->withNotify('Role Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->withNotify('Role Deleted!');
    }


    /**
     * @param Role $role
     * @return mixed
     */
    public function authorizerole(Role $role)
    {
        $this->dynamicPermissions($role, request('permissions'));
        $role->syncPermission(request('permissions'));
        return redirect()->route('role.show', $role->id)->withNotify('Authorization successful.');
    }

    /**
     * @param $role
     * @param $request
     * @return void
     */
    private function dynamicPermissions($role, $request)
    {
        $permissions = Permission::find($request);
        if (count($permissions) > 0) {
            foreach ($permissions as $permission) {
                if (count($permission->specialUsers) > 0) {
                    foreach ($permission->specialUsers as $specialUser) {
                        $specialUser->specialPermissions()->detach($permission->id);
                        if (! $specialUser->roles->contains($role->id)) {
                            $specialUser->roles()->attach($role->id);
                        }
                    }
                }
            }
        }
    }
}
