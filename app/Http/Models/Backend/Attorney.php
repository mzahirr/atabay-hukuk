<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Trial
 * @package App\Http\Models\Backend
 */
class Attorney extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'number',
        'image',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trials()
    {
        return $this->belongsToMany(Trial::class);
    }


}
