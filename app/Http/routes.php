<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FrontController@index');
Route::get('Admin', 'FrontController@admin');
Route::get('Portal', 'FrontController@portal');

Route::resource('Usuario', 'UsuarioController');
Route::resource('TipoUsuario', 'TipoUsuarioController');
Route::resource('Ventanilla', 'VentanillaController');
Route::resource('TipoVentanilla', 'TipoVentanillaController');
Route::resource('Turno', 'TurnoController');
Route::resource('log', 'LogController');