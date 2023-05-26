<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SelecionarUcController;
use App\Http\Controllers\SelecionarHorarioController;

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
Route::get('/selecionaruc', [SelecionarUcController::class, 'selecionar'])->name('selecionaruc');
Route::get('/confirmarhorarios', [SelecionarHorarioController::class, 'confirmar'])->name('confirmarhorarios');
Route::post('/confirmar', [SelecionarUcController::class, 'confirmar'])->name('confirmar');

 
Route::post('/salvarselecionados', [SelecionarUcController::class, 'salvarSelecionados'])->name('selecionaruc.salvar');

 


Route::post('/selecionarhorario', [SelecionarHorarioController::class, 'selecionar'])->name('selecionarhorario');
Route::get('/selecionarhorario', [SelecionarHorarioController::class, 'selecionar'])->name('selecionarhorario');


// Route::match(['get', 'post'], '/selecionarhorario', [App\Http\Controllers\SelecionarHorarioController::class, 'selecionar'])->name('selecionarhorario');
// Route::match(['get', 'post'], '/selecionarhorario', [SelecionarHorarioController::class, 'selecionar'])->name('selecionarhorario');
// Route::get('/selecionarhorario', [SelecionarHorarioController::class, 'selecionar'])->name('selecionarhorario');
// Route::post('/selecionarhorario', [SelecionarHorarioController::class, 'confirmar'])->name('selecionarhorario');





Route::get('/', function () {
    return view('welcome');
});
