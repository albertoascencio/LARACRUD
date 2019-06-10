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

Route::get('/' ,'ViviendaController@index')->name('Index');;
Route::get('/New', 'ViviendaController@create');
Route::post('/Save', 'ViviendaController@store');
Route::get('/Edit/{id}', 'ViviendaController@get');
Route::post('/Update/{id}', 'ViviendaController@update');
Route::get('/Delete/{id}', 'ViviendaController@destroy');