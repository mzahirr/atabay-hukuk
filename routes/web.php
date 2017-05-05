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

    return view('frontend.welcome', compact('announcements'));
});

Route::get('locale/{locale?}', ['as' => 'locale.setLocale', 'uses' => 'Frontend\LocaleController@setLocale']);

Auth::routes();

Route::get('/home', 'HomeController@index');
