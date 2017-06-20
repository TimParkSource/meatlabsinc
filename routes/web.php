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
    return view('welcome');
});
Route::post('/editprofile', 'EditprofileController@index')->name('editprofile');
Route::get('/editprofile', 'EditprofileController@index')->name('editprofile');
Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

