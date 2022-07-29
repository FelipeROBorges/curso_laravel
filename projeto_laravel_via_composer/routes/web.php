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


Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');


// Sempre manter aparametros opicionais ao lado direitro
// Pois se forem definidos a esquerda gera problemas de rota  
// Ex de erro: {nome?}/{categoria}/{assunto}/{mensagem?}

Route::get('/contato/{nome}/{categoria?}/{assunto?}/{mensagem?}', 
        function(string $nome,
                string  $categoria = 'Categoria não informada'
                        ,string  $mensagem = 'Mensagem não informada',
                                string  $assunto = 'Assunto não informado') {
    echo 'Estamos aqui: '.$nome.'<br>';
    echo 'Essa é sua categoria: '.$categoria.'<br>';
    echo 'Essa é sua mensagem: '.$mensagem.'<br>';
    echo 'Essa é sua assunto: '.$assunto.'<br>';
    
});