<?php

namespace App\Http\Models\Backend;

use App\Http\Traits\Backend\SlugHelper;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Trial
 * @package App\Http\Models\Backend
 */
class Trial extends Model
{
    use SlugHelper;

    /**
     * @var array
     */
    protected $fillable = ['name', 'label'];


}
