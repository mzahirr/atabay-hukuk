<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    /**
     * @var array
     */
    protected $fillable = ['name', 'url'];


}
