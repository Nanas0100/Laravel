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
    return view('hello');
})->name('welcome');

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/index','PostController@index')->name('index');

Route::get('/ikenbako/{id}','PostController@ikenbako')->name('ikenbako');
Route::post('/ikenbako/store/{id}','PostController@iken_store')->name('ikenbako.store');

Route::get('/comment/{id}','HomeController@comment')->name('comment');
Route::get('/nocomment','HomeController@nocomment')->name('nocomment');

Route::get('/post/comment/{id}','HomeController@comment_post')->name('posts.comment');

Route::post('/store','PostController@store')->name('posts.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notification','HomeController@notification')->name('notification');
Route::get('/notification/{id}','HomeController@update')->name('notification.delete');
Route::get('/notification/check/{id}','HomeController@check')->name('notification.check');

Route::get('/block/{id}', 'HomeController@block')->name('block');

Route::get('/delete/{id}', 'HomeController@delete')->name('posts.delete');

Route::get('/{id}','PostController@index')->name('post.title');

Route::post('/comment/store/{id}','HomeController@store')->name('store.com');
