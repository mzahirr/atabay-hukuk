<?php

namespace App\Http\Traits\Backend;

use App\Http\Models\Backend\Permission;
use App\Http\Models\Backend\Role;

/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 2017-03-05
 * Time: 13:23
 */
trait Authorize
{

    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /**
     * @return mixed
     */
    public function specialPermissions()
    {
        return $this->belongsToMany(Permission::class);
    }


    /**
     * @param $role
     *
     * @return mixed
     */
    public function assignRole($role)
    {
        return $this->roles()->save(
            Role::whereName($role)->firstOrFail()
        );
    }


    /**
     * @param $permission
     *
     * @return mixed
     */
    public function assignPermission($permission)
    {
        return $this->specialPermissions()->save(
            Permission::whereName($permission->name)->firstOrFail()
        );
    }


    /**
     * @param $role
     *
     * @return bool
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }

        return ! ! $role->intersect($this->roles)->count();
    }


    /**
     * @param Permission $permission
     *
     * @return bool
     */
    public function hasPermission(Permission $permission)
    {
        if ($this->hasUserPermission($permission)) {
            return true;
        }

        return $this->hasRole($permission->roles);
    }


    /**
     * @param Permission $permission
     *
     * @return mixed
     */
    public function hasUserPermission(Permission $permission)
    {
        return $this->specialPermissions->contains('id', $permission->id);
    }


    /**
     * @param $ids
     */
    public function giveMultipleRole($ids)
    {
        $ids = $ids ?? [];
        $this->roles()->sync($ids);
    }


    /**
     * @param $ids
     */
    public function giveMultiplePermission($ids)
    {
        $ids = $ids ?? [];
        $this->specialPermissions()->sync($ids);
    }
}