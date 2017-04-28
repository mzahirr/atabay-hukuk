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
        Route::resource('trials', 'Backend\TrialController');
    });

    Route::group(['middleware' => 'can:' . env('MÜVEKKİL-YÖNETİMİ') . ''], function () {
        Route::resource('clients', 'Backend\ClientController');
    });
});