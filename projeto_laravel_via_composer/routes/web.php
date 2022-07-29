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

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


// Route::get('/rota1', function(){ return 'rota1';})->name('site.rota1');

// // Recurso de redirecionamento de rotas: redirect
// Route::get('/rota2', function(){ return redirect()->route('site.rota1');})->name('site.rota2');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.index').'"> Clique aqui</a> para ir até a página inicial.';
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