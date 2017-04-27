<?php

namespace App\Http\Models\Backend;

use App\Http\Traits\Backend\SlugHelper;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{

    use SlugHelper;

    protected $fillable = ['name', 'label'];

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return mixed
     */
    public function specialUsers()
    {
        return $this->belongsToMany(User::class);
    }
}
