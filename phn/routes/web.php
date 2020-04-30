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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('/login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/kako','MondaiController@kako')->name('kako');

Route::get('/tangen','TangenController@tangen')->name('tangen');

//kako_2014_gozen
Route::get('/kako/104/gozen/{id}','MondaiController@kako_104_gozen')->name('kako.104gozen');
Route::get('/kako/104/gozen/kotae/{id}','MondaiController@kotae_104_gozen')->name('kotae.104gozen');
Route::get('/kako/104/gozen/kekka','MondaiController@kekka_104_gozen')->name('kekka.104gozen');

//kako_2014_gogo
Route::get('/kako/104/gogo/{id}','MondaiController@kako_104_gogo')->name('kako.104gogo');
Route::get('/kako/104/gogo/kotae/{id}','MondaiController@kotae_104_gogo')->name('kotae.104gogo');
Route::get('/kako/104/gogo/kekka','MondaiController@kekka_104_gogo')->name('kekka.104gogo');

//kyouka
Route::get('/kyouka','JyakutenController@kyouka')->name('kyouka');
Route::get('/kyouka/kotae/{id}','JyakutenController@kotae_kyouka')->name('kyouka.kotae');

//kyoka
Route::get('/jyakuten','JyakutenController@jyakuten')->name('jyakuten');
Route::get('/jyakuten/kotae/{id}','JyakutenController@kotae_jyakuten')->name('jyakuten.kotae');


//tangen1
Route::get('/tangen1/{id}','TangenController@kako_tangen1')->name('kako.tangen1');
Route::get('/tangen1/kotae/{id}','TangenController@kotae_tangen1')->name('kotae.tangen1');

//tangen2
Route::get('/tangen2/{id}','TangenController@kako_tangen2')->name('kako.tangen2');
Route::get('/tangen2/kotae/{id}','TangenController@kotae_tangen2')->name('kotae.tangen2');

//tangen3
Route::get('/tangen3/{id}','TangenController@kako_tangen3')->name('kako.tangen3');
Route::get('/tangen3/kotae/{id}','TangenController@kotae_tangen3')->name('kotae.tangen3');

//tangen4
Route::get('/tangen4/{id}','TangenController@kako_tangen4')->name('kako.tangen4');
Route::get('/tangen4/kotae/{id}','TangenController@kotae_tangen4')->name('kotae.tangen4');

//tangen5
Route::get('/tangen5/{id}','TangenController@kako_tangen5')->name('kako.tangen5');
Route::get('/tangen5/kotae/{id}','TangenController@kotae_tangen5')->name('kotae.tangen5');

//tangen6
Route::get('/tangen6/{id}','TangenController@kako_tangen6')->name('kako.tangen6');
Route::get('/tangen6/kotae/{id}','TangenController@kotae_tangen6')->name('kotae.tangen6');

//tangen7
Route::get('/tangen7/{id}','TangenController@kako_tangen7')->name('kako.tangen7');
Route::get('/tangen7/kotae/{id}','TangenController@kotae_tangen7')->name('kotae.tangen7');

//tangen8
Route::get('/tangen8/{id}','TangenController@kako_tangen8')->name('kako.tangen8');
Route::get('/tangen8/kotae/{id}','TangenController@kotae_tangen8')->name('kotae.tangen8');

//tangen9
Route::get('/tangen9/{id}','TangenController@kako_tangen9')->name('kako.tangen9');
Route::get('/tangen9/kotae/{id}','TangenController@kotae_tangen9')->name('kotae.tangen9');

//tangen10
Route::get('/tangen10/{id}','TangenController@kako_tangen10')->name('kako.tangen10');
Route::get('/tangen10/kotae/{id}','TangenController@kotae_tangen10')->name('kotae.tangen10');
