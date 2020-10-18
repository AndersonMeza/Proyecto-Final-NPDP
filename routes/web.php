<?php

use Illuminate\Support\Facades\Route;

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

// Rutas para Usuarios
//Route::resource('usuarios', 'UsuariosController');
Route::get('/usuarios', 'UsuariosController@index');
Route::get('/usuarios/create', 'UsuariosController@create');
Route::post('/usuarios/store', 'UsuariosController@store');
Route::get('/usuarios/show/{id}', 'UsuariosController@show');
Route::get('/usuarios/edit/{id}', 'UsuariosController@edit');
Route::post('/usuarios/update/{id}', 'UsuariosController@update');
Route::get('/usuarios/destroy/{id}', 'UsuariosController@destroy');


Route::get('/grupos', 'GruposController@index');
Route::get('/grupos/create', 'GruposController@create');
Route::post('/grupos/store', 'GruposController@store');
Route::get('/grupos/show/{id}', 'GruposController@show');
Route::get('/grupos/edit/{id}', 'GruposController@edit');
Route::post('/grupos/update/{id}', 'GruposController@update');
Route::get('/grupos/destroy/{id}', 'GruposController@destroy');
Route::get('/grupos/join/{idGrupo}/{idUsuario}', 'GruposController@join');
Route::get('/grupos/check/{idUsuario}/{op}', 'GruposController@check');


Route::get('/publicaciones', 'PublicacionesController@index');
Route::get('/publicaciones/create', 'PublicacionesController@create');
Route::post('/publicaciones/store', 'PublicacionesController@store');
Route::get('/publicaciones/show/{id}', 'PublicacionesController@show');
Route::get('/publicaciones/edit/{id}', 'PublicacionesController@edit');
Route::post('/publicaciones/update/{id}', 'PublicacionesController@update');
Route::get('/publicaciones/destroy/{id}', 'PublicacionesController@destroy');
Route::post('/publicaciones/search', 'PublicacionesController@search');


Route::get('/publicaciones_x_usuario', 'Publicaciones_x_UsuarioController@index');
Route::get('/publicaciones_x_usuario/create', 'Publicaciones_x_UsuarioController@create');
Route::post('/publicaciones_x_usuario/store', 'Publicaciones_x_UsuarioController@store');
Route::get('/publicaciones_x_usuario/show/{post}/{user}', 'Publicaciones_x_UsuarioController@show');
Route::get('/publicaciones_x_usuario/edit/{post}/{user}', 'Publicaciones_x_UsuarioController@edit');
Route::post('/publicaciones_x_usuario/update/{post}/{user}', 'Publicaciones_x_UsuarioController@update');
Route::get('/publicaciones_x_usuario/destroy/{post}/{user}', 'Publicaciones_x_UsuarioController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
