<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class ActivityTranslation
 * @package App\Http\Models\Backend
 */
class ActivityTranslation extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'subject',
        'description',
        'locale',
    ];


}
