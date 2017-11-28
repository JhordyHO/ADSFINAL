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

Route::post('mobiliario/create', 'MobiliarioController@store');
Route::group(['middleware' => ['isAdmin']], function () {
    Route::get('mobiliario', 'MobiliarioController@index');

});

//--------------------------------- test ------------
Route::get('session',function(){
    return session()->all();
});
