<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Activity
 * @package App\Http\Models\Backend
 */
class Activity extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'is_active',
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(ActivityTranslation::class);
    }

    /**
     * @param string $locale
     *
     * @return mixed
     */
    public function getTranslation($locale = 'tr')
    {
        return $this->hasMany(ActivityTranslation::class)->whereLocale($locale);
    }


}
