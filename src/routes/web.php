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

Route::get('/', function () {
    return view('layout');
});

Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
Route::get('/cliente/{id}', [\App\Http\Controllers\ClientesController::class, 'show'])->name('clientes.edit');
Route::get('/clientes/novo', [\App\Http\Controllers\ClientesController::class, 'create'])->name('clientes.create');
Route::post('clientes', [\App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.store');
Route::post('clientes/busca', [\App\Http\Controllers\ClientesController::class, 'busca'])->name('clientes.busca');
Route::post('/cliente/{id}', [\App\Http\Controllers\ClientesController::class, 'update'])->name('clientes.update');

Route::get('/pratos', [\App\Http\Controllers\PratosController::class, 'index'])->name('pratos');
Route::get('/pratos/novo', [\App\Http\Controllers\PratosController::class, 'create'])->name('pratos.create');
Route::get('/pratos/{id}', [\App\Http\Controllers\PratosController::class, 'show'])->name('pratos.edit');
Route::post('pratos', [\App\Http\Controllers\PratosController::class, 'store'])->name('pratos.store');
Route::post('/pratos/{id}', [\App\Http\Controllers\PratosController::class, 'update'])->name('pratos.update');
