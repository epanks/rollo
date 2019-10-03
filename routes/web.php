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


Route::get('/paket', 'PaketController@index');
Route::post('/paket/create', 'PaketController@create');
Route::get('/paket/{id}/edit', 'PaketController@edit');
Route::post('/paket/{id}/update', 'PaketController@update');
Route::get('/paket/{id}/delete', 'PaketController@delete');


Route::get('/balai', 'BalaiController@index');
Route::get('/balai/{id}/profile', 'BalaiController@profile');

Route::get('/satker', 'SatkerController@index');
Route::get('/satker/{kdsatker}/list', 'SatkerController@list');
