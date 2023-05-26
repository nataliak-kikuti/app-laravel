<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelecionarUcController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/selecionaruc', [SelecionarUcController::class, 'selecionar'])->name('selecionaruc');
// Route::get('/exemplo', function (Request $request) {
//     return response()->json(['mensagem' => 'Bem-vindo à API']);
// });
// Route::post('/selecionaruc', 'App\Http\Controllers\SelecionarUcApiController@selecionar');

Route::post('/salvarselecionados', [SelecionarUcController::class, 'salvarSelecionados'])->name('selecionaruc.salvar');