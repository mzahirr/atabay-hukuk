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

Route::get('articles/{article}', 'Frontend\ArticleController@show')->name('articles.show');

Route::get('pages/{page}', 'Frontend\PageController@show')->name('pages.show');

Route::get('lawyers', 'Frontend\LawyerController@index')->name('lawyers.index');
Route::get('news', 'Frontend\NewsController@index')->name('news.index');
Route::get('contacts', 'Frontend\ContactController@index')->name('contacts.index');
Route::get('query', 'Frontend\ContactController@query')->name('files.query');
Route::get('actions', 'Frontend\ContactController@index')->name('actions.index');
