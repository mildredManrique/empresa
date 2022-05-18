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

Route::get('/clientes', 'ClienteController@index');
Route::post('/clientes', 'ClienteController@store')->name('clientes.store');
Route::get('/clientes/agregar', 'ClienteController@create')->name('clientes.create');
Route::put('/clientes/{cliente}', 'ClienteController@update')->name('clientes.update');
Route::delete('/clientes/{cliente}', 'ClienteController@destroy')->name('clientes.destroy');
Route::get('/clientes/{cliente}/editar', 'ClienteController@edit')->name('clientes.edit');

Route::get('/add-to-cart/{id_material}', 'ProductoController@getAddToCart')->name('producto.addToCart');

Route::get('/reduce/{id_material}', 'ProductoController@getReduceByOne')->name('producto.reduceByOne');

Route::get('/remove/{id_material}', 'ProductoController@getRemoveItem')->name('producto.remove');

Route::get('/add-by-one/{id_material}', 'ProductoController@getAddByOne')->name('producto.addByOne');

Route::get('/shopping-cart', 'ProductoController@getCart')->name('producto.shoppingCart');

Route::get('/checkout', 'ProductoController@getCheckout')->name('checkout');
Route::post('/checkout', 'ProductoController@postCheckout')->name('checkout');

Route::group(['middleware' => 'guest'], function(){

Route::get('/signup', 'UserController@getSignup')->name('user.signup');
Route::post('/signup', 'UserController@postSignup')->name('user.signup');

Route::get('/signin', 'UserController@getSignin')->name('user.signin');
Route::post('/signin', 'UserController@postSignin')->name('user.signin');

});

Route::group(['middleware' => 'auth'], function(){

Route::get('/profile', 'UserController@getProfile')->name('user.profile');
Route::get('/logout', 'UserController@getLogout')->name('user.logout');

});


