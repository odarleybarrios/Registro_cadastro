<?php

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

Route::get('/ordem_servicos/servico/{id}', [App\Http\Controllers\OrdemServicoController::class, 'servico'])->name('ordem_servicos.servico');
Route::resources([
    'aparelhos' => App\Http\Controllers\AparelhoController::class,
    'servicos' => App\Http\Controllers\ServicoController::class,
    'clientes' => App\Http\Controllers\ClienteController::class,
    'ordem_servicos' => App\Http\Controllers\OrdemServicoController::class,
    'usuarios' => App\Http\Controllers\UsuarioController::class,

]);

