<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 4.03.2017
 * Time: 11:51
 */


Route::group(['middleware' => 'can:' . env('PANEL-YÖNETİMİ') . ''], function () {
    Route::get('dashboard', 'Backend\DashboardController')->name('backend.dashboard');
    Route::group(['middleware' => 'can:' . env('SİSTEM-YÖNETİMİ') . ''], function () {
        Route::resource('permissions', 'Backend\PermissionController',
            ['except' => ['show']]);
        Route::post('roles/authorize/{role}', 'Backend\RoleController@authorizeroles')->name('roles.authorize');
        Route::resource('roles', 'Backend\RoleController');
    });

    Route::group(['middleware' => 'can:' . env('KULLANICI-YÖNETİMİ') . ''], function () {
        Route::post('users/authorize/{user}', 'Backend\UserController@authorizeusers')->name('users.authorize');
        Route::resource('users', 'Backend\UserController');
    });

    Route::group(['middleware' => 'can:' . env('DAVA-YÖNETİMİ') . ''], function () {
        Route::get('trials/{trial}/status', 'Backend\TrialController@status')->name('trials.status');
        Route::post('trials/{trial}/status', 'Backend\TrialController@statusStore')->name('trials.statusStore');

        Route::get('trials/{trial}/attorney', 'Backend\TrialController@attorney')->name('trials.attorney');
        Route::post('trials/{trial}/attorney', 'Backend\TrialController@attorneyStore')->name('trials.attorneyStore');

        Route::get('trials/{trial}/client', 'Backend\TrialController@client')->name('trials.client');
        Route::post('trials/{trial}/client', 'Backend\TrialController@clientStore')->name('trials.clientStore');

        Route::resource('trials', 'Backend\TrialController');
        Route::resource('statuses', 'Backend\StatusController');
    });

    Route::group(['middleware' => 'can:' . env('MÜVEKKİL-YÖNETİMİ') . ''], function () {
        Route::resource('clients', 'Backend\ClientController');
    });


    Route::group(['middleware' => 'can:' . env('İÇERİK-YÖNETİMİ') . ''], function () {
        Route::resource('announcements', 'Backend\AnnouncementController');
        Route::resource('activities', 'Backend\ActivityController');
        Route::resource('articles', 'Backend\ArticleController',
            ['except' => ['show']]);
    });


    Route::group(['middleware' => 'can:' . env('AVUKAT-YÖNETİMİ') . ''], function () {
        Route::resource('attorneys', 'Backend\AttorneyController');
    });
});