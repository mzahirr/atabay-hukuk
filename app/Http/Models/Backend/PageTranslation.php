<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class PageTranslation
 * @package App\Http\Models\Backend
 */
class PageTranslation extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'locale',
        'title',
        'body',
    ];


}
