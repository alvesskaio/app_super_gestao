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

// Route::get('/', function () {
//     return "Hello world";
// });

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobreNos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'login'; } )->name('site.login');

Route::prefix('/app')->group(function(){ 

    // Deve receber aqui, as Routes que deveram possuir esse prefixo
    Route::get('/clientes',
    function(){ return 'clientes'; })->name('app.clientes');

    Route::get('/fornecedores',
    function(){ return 'fornecedores'; })->name('app.fornecedores');

    Route::get('/produtos',
    function(){ return 'produtos'; })->name('app.produtos');
});

Route::get('/rota1', function(){
    echo 'Rota1';
})->name('site.rota1');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');


// Route::redirect('/rota2','/rota1');

/* 
Passando parametros pelas route

    Route::get('/contato/{nome}/{categoria_id}',
        function (
            string $nome,
            int $categoria_id = 1
        ) {
            echo "Estamos aqui - $nome - $categoria_id ";
        }
    )->where("nome","[A-Za-z]+")->where("categoria_id","[1-9]+");

Sintaxe - Route:: V H ($uri, $callback);

    V H = Verbo HTTP

    Verbo HTTP-

    get - Route::get($uri, $callback);

    post - Route::post($uri, $callback);

    put - Route::put($uri, $callback);

    patch - Route::patch($uri, $callback);

    delete - Route::delete($uri, $callback);

    options - Route::options($uri, $callback);

*/