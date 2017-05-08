<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    $announcements = \App\Http\Models\Backend\Announcement::with('getTranslation')->get();
    $activities    = \App\Http\Models\Backend\Activity::with('getTranslation')->take(6)->get();
    $articles      = \App\Http\Models\Backend\Article::with('getTranslation', 'user')->take(9)->get();

    return view('frontend.welcome', compact('announcements', 'activities', 'articles'));
});

Route::get('locale/{locale?}', ['as' => 'locale.setLocale', 'uses' => 'Frontend\LocaleController@setLocale']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('articles/{article}', 'HomeController@index')->name('articles.show');

