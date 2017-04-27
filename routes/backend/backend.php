<?php
/**
 * Created by PhpStorm.
 * User: MacbookPro
 * Date: 4.03.2017
 * Time: 11:51
 */

Route::get('dashboard', 'Backend\DashboardController')->name('backend.dashboard');


Route::group(['middleware' => 'can:' . env('SYSTEM_MANAGEMENT') . ''], function () {
    Route::resource('permission', 'Backend\PermissionController',
        ['except' => ['show']]);
    Route::post('role/authorize/{role}', 'Backend\RoleController@authorizerole')->name('role.authorize');
    Route::resource('role', 'Backend\RoleController');
});

Route::group(['middleware' => 'can:' . env('USER_MANAGEMENT') . ''], function () {
    Route::post('user/authorize/{user}', 'Backend\UserController@authorizeuser')->name('user.authorize');
    Route::resource('user', 'Backend\UserController');
});