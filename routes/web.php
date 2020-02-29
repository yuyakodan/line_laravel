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

Route::group(['middleware' => 'check'], function() {
    //「ログインしていない場合はログイン画面に遷移させるページ」はここにRouteを書く
    Route::get('/', function () {return view('welcome');});
    Route::get('/talk', 'HomeController@talk')->name('talk');
}); 