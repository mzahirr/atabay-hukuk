<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trial
 * @package App\Http\Models\Backend
 */
class Trial extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['status_id', 'number', 'court', 'subject', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attorneys()
    {
        return $this->belongsToMany(Attorney::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }


}
