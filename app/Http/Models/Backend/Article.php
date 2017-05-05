<?php

namespace App\Http\Models\Backend;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


/**
 * Class Article
 * @package App\Http\Models\Backend
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'is_active',
        'image',
        'user_id',
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(ArticleTranslation::class);
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

        return $this->hasMany(ArticleTranslation::class)->whereLocale($locale);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
