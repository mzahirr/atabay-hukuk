<?php

namespace App\Http\Models\Backend;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Announcement
 * @package App\Http\Models\Backend
 */
class AnnouncementTranslation extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = [
        'locale',
        'announcement',
    ];




}
