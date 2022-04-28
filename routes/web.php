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

Route::get('/', 'ProductoController@index');

Route::get('productos/agregar', 'ProductoController@create')->name('productos.create');
Route::post('productos', 'ProductoController@edit')->name('productos.edit');
Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.destroy');

// Route::get('/agregar', 'ProductoController@store');
Route::post('productos', 'ProductoController@store')->name('productos.store');