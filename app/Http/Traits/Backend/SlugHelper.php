<?php
namespace App\Http\Traits\Backend;

/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 2017-03-05
 * Time: 13:36
 */

/**
 * Class SlugTrait
 * @package App\Http\Models\Developer\Traits
 */
trait SlugHelper
{
    /**
     *
     */
    protected static function bootSlugHelper()
    {
        static::creating(function ($model) {
            $model->generateSlugByEvent($model, 'creating');
        });
        static::updating(function ($model) {
            $model->generateSlugByEvent($model, 'updating');
        });
    }

    /**
     * @param $model
     * @param $event
     */
    protected function generateSlugByEvent($model, $event)
    {
        switch ($event) {
            case 'creating':
                $this->slugmain($model);
                break;
            case 'updating':
                $record = static::whereName($model->name)->first();
                if (!is_null($record)) {
                    if ($record->count()) {
                        $model->name = str_slug($model->label);
                    }
                }
                break;
            default:
                $this->slugMain($model);
        }
    }

    /**
     * @param $model
     */
    protected function slugMain($model)
    {
        $model->name = str_slug($model->label);
        $latestslug =
            static::whereRaw("name RLIKE '^{$model->name}(-[0-9]*)?$'")
                ->latest("id")
                ->value("name");
        if ($latestslug) {
            $pieces = explode("-", $latestslug);
            $number = intval(end($pieces));
            $model->name .= "-" . ($number + 1);
        }
    }
}