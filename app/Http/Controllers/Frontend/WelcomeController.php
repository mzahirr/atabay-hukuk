<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Models\Backend\Activity;
use App\Http\Models\Backend\Announcement;
use App\Http\Models\Backend\Article;
use App\Http\Models\Backend\Partner;

class WelcomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $announcements = Announcement::with('getTranslation')->get();
        $activities    = Activity::with('getTranslation')->take(6)->get();
        $articles      = Article::with('getTranslation', 'user')->take(9)->get();
        $partners      = Partner::all();

        return view('frontend.welcome', compact('announcements', 'activities', 'articles', 'partners'));

    }
}
