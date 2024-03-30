<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProdutoController;

Route::get('/produtos', [ProdutoController::class, 'index']); // Listar todos os produtos
Route::post('/produtos', [ProdutoController::class, 'store']); // Criar um novo produto
Route::get('/produtos/{id}', [ProdutoController::class, 'show']); // Mostrar detalhes de um produto específico
Route::put('/produtos/{id}', [ProdutoController::class, 'update']); // Atualizar um produto existente
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']); // Excluir um produto existente
