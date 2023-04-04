<?php

use App\Http\Controllers\AgeController;
use App\Http\Controllers\CalculoController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{nome}', [NameController::class, 'nome']
)->where('nome', '^[A-Z][a-z]{2,}$');

Route::get('/conta/{number1}/{number2}/{operacao?}', [CalculoController::class, 'calculo']
)   ->where ('number1', '[0-9]+') 
    ->where('number2', '[0-9]+');

Route::get('/idade/{ano}/{mes?}/{dia?}', [AgeController::class, 'idade']
)  ->where('ano','[0-9]{4}') 
    ->where('mes', '[0-9]{1,2}?')
    ->where('dia', '[0-9]{1,2}?');


