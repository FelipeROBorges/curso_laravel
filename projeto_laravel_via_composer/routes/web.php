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


// Utilizando o name ao final de uma rota é possivel atribuir um nome a mesma
// Oque não podifica o caminho mas facilita a chamada e padronização da mesma
// Evitando assim a dependencia direto entre rotas e nomes de páginas
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');

// Agrupamento de rotas atravez do prefixo app e chamada de group
Route::prefix('/app')->group(function(){ 
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');

});


/* 
* Sempre manter aparametros opicionais ao lado direitro
* Pois se forem definidos a esquerda gera problemas de rota  
* Ex de erro: {nome?}/{categoria}/{assunto}/{mensagem?}
*/

// Route::get('/contato/{nome}/{categoria_id}', 
//         function(
//             string $nome,
//             int  $categoria_id = 1
//         ) {
//     echo 'Estamos aqui: '.$nome.'<br>';
//     echo 'Essa é sua categoria: '.$categoria_id;

// })->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+'); // Contrução de espreção regular, que trata erros de tipagem