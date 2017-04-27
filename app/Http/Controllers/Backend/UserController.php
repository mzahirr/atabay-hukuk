<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\UsersDataTable;
use App\Http\Models\Backend\Permission;
use App\Http\Models\Backend\Role;
use App\Http\Requests\Backend\UserStore;
use App\Http\Requests\Backend\UserUpdate;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param UsersDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('backend.user.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::doesntHave('roles')->get();
        $roles       = Role::all();

        return view('backend.user.create', compact('permissions', 'roles'));
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        $permissions = Permission::doesntHave('roles')->get();
        $roles       = Role::all();

        return view('backend.user.authorize', compact('permissions', 'roles', 'user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param UserStore|Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request)
    {
        $user = User::create($request->only('name', 'email', 'username', 'password'));
        $user->giveMultipleRole($request->input('roles', []));
        $user->giveMultiplePermission($request->input('permissions', []));

        return back()->withNotify('Kullanıcı Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(User $user)
    {
        $permissions = Permission::doesntHave('roles')->get();
        $roles       = Role::all();

        return view('backend.user.edit', compact('permissions', 'roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserUpdate|Request $request
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(UserUpdate $request, User $user)
    {
        if ($request->has('password')) {
            $user->update($request->only('name', 'email', 'username', 'password'));
        } else {
            $user->update($request->only('name', 'email', 'username'));
        }
        $user->giveMultipleRole($request->input('roles', []));
        $user->giveMultiplePermission($request->input('permissions', []));

        return back()->withNotify('Kullanıcı Düzenlendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->withNotify('Kullanıcı Silindi!');
    }

    /**
     * @param User $user
     *
     * @return mixed
     */
    public function authorizeusers(User $user)
    {
        $user->giveMultipleRole(request('roles', []));
        $user->giveMultiplePermission(request('permissions', []));

        return back()->withNotify('Yetkilendirme Başarılı.');
    }
}
