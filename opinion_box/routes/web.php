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
Route::get('/kiyaku', function () {
    return view('kiyaku');
});



Route::get('/index','PostController@index')->name('index');

Route::post('/store','HomeController@store')->name('posts.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notification','HomeController@notification')->name('notification');
Route::get('/notification/{id}','HomeController@update')->name('notification.delete');
Route::get('/notification/check/{id}','HomeController@check')->name('notification.check');

Route::get('/block/{id}', 'HomeController@block')->name('block');

Route::get('/delete/{id}', 'HomeController@delete')->name('posts.delete');

Route::get('/{id}','PostController@index')->name('post.title');

Route::post('/comment/{id}','PostController@store')->name('store.com');

Route::get('/reply/{id}','PostController@reply')->name('reply.com');
Route::get('/resp/{id}','PostController@resp')->name('resp.com');

Route::post('/reply/store/{id}','PostController@reply_store')->name('reply.store');
