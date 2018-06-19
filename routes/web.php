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

Route::resource('correos', 'CorreosController');
Route::resource('productos', 'ProductosController');
/*Route::get('/', function () {    return view('home');});*/
Route::get('/', 'FrontendController@home')->name('home');
Route::get('/home', 'FrontendController@home')->name('home');
Route::get('/reservas', 'FrontendController@reservas')->name('reservas');
Route::get('/menu', 'ProductosController@index')->name('productos');
Route::get('/contacto', 'FrontendController@contacto')->name('contacto');
Route::get('/servicios', 'ServiciosController@index')->name('servicios');
Route::post('/correos', 'CorreosController@store')->name('subscripcion');
Route::get('/productos', 'ProductosController@destroy')->name('delete');

Route::get('/productos', 'ProductosController@destroy')->name('delete');
Route::get('/productos', 'ProductosController@edit')->name('editar_producto');
Route::get('/productos', 'ProductosController@create')->name('mostrar_formulario');
Route::post('/productos', 'ProductosController@store')->name('crear_producto');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
