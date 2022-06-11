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
    return 'Olá, seja bem vindo ao curso!';
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');

Route::prefix('app')->group(function (){
    Route::get('/cliente',function (){return 'Clientes';});
    Route::get('/fornecedor',function (){return 'Fornecedor';});
    Route::get('/produtos', function (){return 'Produtos';});
    Route::get('/van', function (){return '<h1>Te amo meu amor!S2</h1>';});
});