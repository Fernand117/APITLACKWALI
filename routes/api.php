<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * RUTAS API PARA EL CONTROL DE CLIENTES
 */
Route::post('registro', 'Auth\RegisterController@create');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::get('telefonos', 'TelefonosController@index');
Route::get('telefonos/{id}', 'TelefonosController@edit');
Route::post('telefonos', 'TelefonosController@store');
Route::put('telefonos/{id}', 'TelefonosController@update');
Route::delete('telefonos/{id}', 'TelefonosController@destroy');
/**
 * RTUAS API PARA GESTIÓN DE CATEGORIAS
 */
Route::get('categorias', 'CategoriasController@index');
Route::get('categorias/{id}', 'CategoriasController@edit');
Route::post('categorias', 'CategoriasController@store');
Route::put('categorias/{id}', 'CategoriasController@update');
Route::delete('categorias/{id}', 'CategoriasController@destroy');

/**
 * RUTAS API PARA LA GESTIÓN DE LOS PRODUCTOS
 */

Route::get('productos', 'ProductosController@index');
Route::get('productosOne', 'ProductosController@GetProductsListOne');
Route::get('productosTwo', 'ProductosController@GetProductsListTwo');
Route::get('productosTree', 'ProductosController@GetProductsListTree');
Route::get('productos/{id}', 'ProductosController@edit');
Route::post('productos', 'ProductosController@store');
Route::put('productos/{id}', 'ProductosController@update');
Route::delete('productos/{id}', 'ProductosController@destroy');

/**
 * RUTAS API PARA GESTION DE ORDENES
 */

 Route::get('ordenes', 'OrdenesController@index');
 Route::get('ordenes/{id}','OrdenesController@edit');
 Route::post('ordenes', 'OrdenesController@store');

 /**
  * RUTAS API PARA GESTION DE VENTAS
  */
Route::get('ventas','VentasController@index');
Route::get('ventas/{id}','VentasController@edit');
Route::post('ventas', 'VentasController@store');