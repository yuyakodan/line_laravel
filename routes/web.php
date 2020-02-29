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

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/talk', 'HomeController@talk')->name('talk');
Route::post('/talk', 'TalkController@talking')->name('talking');


Route::group(['middleware' => 'check'], function() {
    //「ログインしていない場合はログイン画面に遷移させるページ」はここにRouteを書く
    Route::resource('/', 'MypageController');
    Route::get('/talk', 'HomeController@talk')->name('talk');
});

