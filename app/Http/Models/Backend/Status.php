<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrialStatus
 * @package App\Http\Models\Backend
 */
class Status extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['label'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trials()
    {
        return $this->hasMany(Trial::class);
    }


}
