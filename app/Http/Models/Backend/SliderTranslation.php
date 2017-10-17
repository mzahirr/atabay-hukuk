<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class SliderTranslation
 * @package App\Http\Models\Backend
 */
class SliderTranslation extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'slider_id',
        'title',
        'locale',
    ];


}
