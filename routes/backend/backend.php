<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 4.03.2017
 * Time: 11:51
 */


Route::group(['middleware' => 'can:' . env('BACKEND_MANAGEMENT') . ''], function () {
    Route::get('dashboard', 'Backend\DashboardController')->name('backend.dashboard');
    Route::group(['middleware' => 'can:' . env('SYSTEM_MANAGEMENT') . ''], function () {
        Route::resource('permissions', 'Backend\PermissionController',
            ['except' => ['show']]);
        Route::post('roles/authorize/{role}', 'Backend\RoleController@authorizeroles')->name('roles.authorize');
        Route::resource('roles', 'Backend\RoleController');
    });

    Route::group(['middleware' => 'can:' . env('USER_MANAGEMENT') . ''], function () {
        Route::post('users/authorize/{user}', 'Backend\UserController@authorizeusers')->name('users.authorize');
        Route::resource('users', 'Backend\UserController');
    });
});