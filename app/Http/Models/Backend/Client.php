<?php

namespace App\Http\Models\Backend;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/**
 * Class Trial
 * @package App\Http\Models\Backend
 */
class Client extends Authenticatable
{
    use Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'identity',
        'name',
        'email',
        'number',
        'password',

    ];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trials()
    {
        return $this->belongsToMany(Trial::class);
    }


}
