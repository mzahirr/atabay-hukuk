<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


/**
 * Class Article
 * @package App\Http\Models\Backend
 * @property string image
 */
class Slider extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'img_source',
        'order',
        'is_active',
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany(SliderTranslation::class);
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

        return $this->hasMany(SliderTranslation::class)->whereLocale($locale);
    }

    /**
     * @param $menu
     * @param int $parentId
     *
     * @return null|string
     */
    public function buildMenu($menu, $parentId = null)
    {
        $result = null;
        foreach ($menu as $item) {
            if ($item->parent_id == $parentId) {
                $result .= "<li class='dd-item dd3-item' data-order='{$item->order}' data-id='{$item->id}'>
      <div class='dd-handle dd3-handle'>
        <span class='glyphicon glyphicon-move'></span>
      </div>
      <div class='dd3-content'>{$item->getTranslation->first()->title}
        <div class='pull-right'>
          <a href='" . route("pages.edit", $item->id) . "'>Düzenle</a>
        </div>
      </div>" . $this->buildMenu($menu, $item->id) . "</li>";
            }
        }

        return $result ? "\n<ol class=\"dd-list\">\n$result</ol>\n" : null;
    }

    // Getter for the HTML menu builder

    /**
     * @param $items
     *
     * @return null|string
     */
    public function getHTML($items)
    {
        return $this->buildMenu($items);
    }
}