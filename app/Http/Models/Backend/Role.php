<?php

namespace App\Http\Models\Backend;

use App\Http\Traits\Backend\SlugHelper;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    use SlugHelper;

    /**
     * @var array
     */
    protected $fillable = ['name', 'label'];

    /**
     * A role may be given various permissions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * Grant the given permission to a role.
     *
     * @param  Permission $permission
     *
     * @return mixed
     */
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }

    /**
     * Give role to multiple permission update
     *
     * @param  array $ids permission ids
     *
     * @return  void
     */
    public function syncPermission($ids)
    {
        $ids = $ids ?? [];
        $this->permissions()->sync($ids);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
