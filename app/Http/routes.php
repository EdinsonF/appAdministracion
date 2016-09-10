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

Route::get('/','inicioController@index');
Route::get('admin','adminController@index');
Route::get('/logout','loginController@logout');

//Route::post('persona/usuario','personaController@RegistrarUsuario');
Route::resource('login','loginController');
Route::resource('persona','personaController');
Route::resource('usuario','usuarioController');
