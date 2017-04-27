<?php

namespace App;

use App\Http\Traits\Backend\Authorize;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable, Authorize;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return string
     * Get user specified avatar
     */
    public function gravatar()
    {
        return sprintf('https://en.gravatar.com/avatar/%s', md5($this->email));
    }

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


}
