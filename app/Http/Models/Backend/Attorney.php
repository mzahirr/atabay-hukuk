<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


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
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(AttorneyTranslation::class);
    }

    /**
     * @param string $locale
     *
     * @return mixed
     */
    public function getTranslation($locale = null)
    {
        if ($locale == null) {
            $locale = App::getLocale();
        }

        return $this->hasMany(AttorneyTranslation::class)->whereLocale($locale);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function trials()
    {
        return $this->belongsToMany(Trial::class);
    }


}
