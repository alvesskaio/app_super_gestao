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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);


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