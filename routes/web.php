<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;

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

Route::resource('companies', CompanyController::class);

// Rotas para Usuários
Route::get('/usuarios', function () {
    return view('usuarios.index');
})->name('usuarios.index');

// Rotas para Produtos
Route::get('/produtos', function () {
    return view('produtos.index');
})->name('produtos.index');

// Rotas para Vendas
Route::get('/vendas', function () {
    return view('vendas.index');
})->name('vendas.index');