<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function(){
    Route::resource('users', 'User\UserController');
    Route::resource('files', 'Files\FileController');
    Route::resource('apartmenttypes', 'Apartments\ApartmentTypeController');
    Route::resource('apartmenttags', 'Apartments\ApartmentTagController');
    Route::resource('roles', 'User\RoleController');
});

