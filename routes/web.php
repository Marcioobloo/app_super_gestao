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
    return('olá, seja bem vindo ao curso');
});
*/
route::get('/','PrincipalController@principal')->name('site.index');

Route::get('/sobrenos','sobrenosController@sobrenos')->name('site.sobre-nos');

Route::get('/contato','ContatoController@Contato')->name('site.contato');
Route::post('/contato','ContatoController@Contato')->name('site.contato');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){return 'produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

Route::fallback(function(){
    echo 'esta rota não existe. <a href="'.route('site.index').'">Clique aqui</a> para retornar a página inicial';
   
   });

/*
route::get('/contato/{nome}/{grupo?}/{party_id}', 
    function(string $kronk, string $survey = 'mensagem não informada', int $party_id = 1){
    echo "Estamos aqui: $kronk - $survey - $party_id";
    }
)->where('party_id', '[0-9]+');
*/
