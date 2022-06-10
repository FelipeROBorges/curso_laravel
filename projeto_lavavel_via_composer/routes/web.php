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

/*

Route::get('/', function () {
    return 'Olá mundo!';
});
*/

Route::get('/','PrincipalController@principal');
// O laravel entende que quando é mandado uma string, está se referindo a um contorlador com uma ação a ser executada

/*
Route::get('/sobre-nos', function () {
    return 'Está na página sobre nos!';
});

Route::get('/contato', function () {
    return 'Esse é meu contato!';
});
*/

Route::get('/contato','ContatoController@contato');
Route::get('/sobre_nos','SobreNosController@sobre_nos');

/*
    Verbos http

    get
    post
    put
    patch
    delete
    options

*/