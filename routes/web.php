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

Route::get('/', 'NavigationController@index')->name('index');
Route::get('/about', 'NavigationController@about')->name('about');
Route::get('/blog', 'BlogController@index')->name('blog');
// Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');
Route::get('/blog/show', function(){
    return view('blog.show');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
