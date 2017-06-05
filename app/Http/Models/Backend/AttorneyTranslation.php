<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class AttorneyTranslation
 * @package App\Http\Models\Backend
 */
class AttorneyTranslation extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'description',
        'locale',
    ];


}
