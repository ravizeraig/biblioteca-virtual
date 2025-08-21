<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rota de Recurso para o CRUD de produtos
Route::resource('produtos', ProdutoController::class);
