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


Route::get('/', 'Frontend\WelcomeController');
Route::get('locale/{locale?}', 'Frontend\LocaleController@setLocale')->name('locale.setLocale');
Auth::routes();
Route::get('articles/{article}/show', 'Frontend\ArticleController@show')->name('articles.show');
Route::get('pages/{page}/show', 'Frontend\PageController@show')->name('pages.show');
Route::get('lawyers', 'Frontend\LawyerController@index')->name('lawyers.index');
Route::get('news/{news}', 'Frontend\NewsController@show')->name('news.show');
Route::get('news', 'Frontend\NewsController@index')->name('news.index');
Route::get('contacts', 'Frontend\ContactController@index')->name('contacts.index');
Route::post('contacts/add', 'Frontend\ContactController@form')->name('contacts.form');
Route::get('query', 'Frontend\FileQueryController@query')->name('files.query');
Route::post('query/check', 'Frontend\FileQueryController@check')->name('files.query_check');
Route::get('actions', 'Frontend\ActionController@index')->name('actions.index');
