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

Route::get('/home', function () {
    return view('home');
});
Route::get('/alimentos/novo', 'AlimentoController@create');

Route::get('/tipos/novo', 'TipoController@create');
Route::get('/tipos', 'TipoController@index');
Route::get('/tipos/editar', 'TipoController@update');
Route::get('/')
