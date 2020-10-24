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

Route::get('/clientes', [\App\Http\Controllers\CustomerController::class, 'index'])->name('clientes');
Route::get('/cliente/{id}', [\App\Http\Controllers\CustomerController::class, 'show'])->name('clientes.edit');
Route::get('/clientes/novo', [\App\Http\Controllers\CustomerController::class, 'create'])->name('clientes.create');
Route::post('clientes', [\App\Http\Controllers\CustomerController::class, 'store'])->name('clientes.store');
Route::post('clientes/busca', [\App\Http\Controllers\CustomerController::class, 'busca'])->name('clientes.busca');
Route::post('/cliente/{id}', [\App\Http\Controllers\CustomerController::class, 'update'])->name('clientes.update');

Route::get('/pratos', [\App\Http\Controllers\ProductsController::class, 'index'])->name('pratos');
Route::get('/pratos/novo', [\App\Http\Controllers\ProductsController::class, 'create'])->name('pratos.create');
Route::get('/pratos/{id}', [\App\Http\Controllers\ProductsController::class, 'show'])->name('pratos.edit');
Route::post('pratos', [\App\Http\Controllers\ProductsController::class, 'store'])->name('pratos.store');
Route::post('/pratos/{id}', [\App\Http\Controllers\ProductsController::class, 'update'])->name('pratos.update');

Route::get('/cliente/{id}/pedido/novo', [\App\Http\Controllers\OrderController::class, 'create'])->name('pedido.create');
Route::post('/cliente/{id}/pedido/store', [\App\Http\Controllers\OrderController::class, 'store'])->name('pedido.store');

Route::get('/order/view/{id}', [\App\Http\Controllers\OrderController::class, 'view'])->name('order.view');
