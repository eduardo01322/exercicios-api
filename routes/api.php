<?php

use App\Http\Controllers\ExUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExUm::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExDois::class, 'retornarMaior']);

Route::post('tres', 
[ExTres::class, 'media']);

Route::post('exercicio/quatro', 
[ExQuatro::class, 'verificar']);

Route::post('cinco', 
[ExCinco::class, 'divisivel']);

Route::post('seis', 
[ExSeis::class, 'idade']);

Route::get('exercicio/sete', 
[ExSete::class, 'exibirNumeros']);

Route::post('oito', 
[ExOito::class, 'tabuada']);

Route::post('nove', 
[ExNove::class, 'exibir']);

Route::get('dez', 
[ExDez::class, 'impar']);

Route::post('onze', 
[ExOnze::class, 'calculadora']);

Route::get('doze', 
[ExDoze::class, 'decrescente']);

Route::get('treze', 
[ExTreze::class, 'divisiveis']);

