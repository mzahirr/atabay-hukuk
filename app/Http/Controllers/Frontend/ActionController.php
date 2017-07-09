<?php namespace App\Http\Controllers\Frontend;

use App\Http\Models\Backend\Activity;
use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ActionController
 * @package App\Http\Controllers\Frontend
 */
class ActionController extends Controller
{
    public function index()
    {
        $activities = Activity::orderBy('order')->paginate(5);

        return view('frontend.activity.list', compact('activities'));
    }
}
