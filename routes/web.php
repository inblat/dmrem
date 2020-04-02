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

Route::any('/test', 'AjaxController@test');
Route::post('/feedback', 'AjaxController@feedback')->name('feedback');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/posts', 'HomeController@posts')->name('posts');
Route::get('/post/{slug}', 'HomeController@post')->name('post');
Route::get('/home', function () {
    return view('home');
});

Route::resource('comments', 'CommentController');
