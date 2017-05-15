<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


/**
 * Class Partner
 * @package App\Http\Models\Backend
 */
class Partner extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'image',
    ];

}
