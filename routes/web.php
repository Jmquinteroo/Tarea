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

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{id}','Admin_Vehiculo@index')->name('zonainicio');
Route::get('/A765/registrar','Admin_Vehiculo@create')->name('registro');
Route::post('/A765/registrar','Admin_Vehiculo@store')->name('registrostore');
Route::get('/A765/lista','Admin_Vehiculo@show')->name('lista');
Route::get('/A765/estadisticas','Admin_Vehiculo@edit')->name('estadisticas');
