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


Route::get('/','NavegacaoController@index');
Route::get('contato','NavegacaoController@contato');
Route::get('reviews','NavegacaoController@reviews');
Route::get('admin','NavegacaoController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');

/*

Route::get('/', function () {
    return view('welcome');
});


*/