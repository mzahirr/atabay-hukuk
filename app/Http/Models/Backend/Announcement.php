<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Announcement
 * @package App\Http\Models\Backend
 */
class Announcement extends Model
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
        return $this->hasMany(AnnouncementTranslation::class);
    }

    /**
     * @param string $locale
     *
     * @return mixed
     */
    public function getTranslation($locale = 'tr')
    {
        return $this->hasMany(AnnouncementTranslation::class)->whereLocale($locale);
    }


}
