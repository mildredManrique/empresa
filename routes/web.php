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
Route::post('productos', 'ProductoController@store')->name('productos.store');
Route::get('productos/agregar', 'ProductoController@create')->name('productos.create');
Route::put('productos/{producto}', 'ProductoController@update')->name('productos.update');
Route::delete('productos/{producto}', 'ProductoController@destroy')->name('productos.destroy');
Route::get('productos/{producto}/editar', 'ProductoController@edit')->name('productos.edit');