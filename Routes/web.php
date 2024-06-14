<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\CarrinhoController;

// Rota para listar todos os clientes
Route::get('/clientes', [ClienteController::class, 'index']);

// Rota para exibir detalhes de um cliente específico
Route::get('/clientes/{id}', [ClienteController::class, 'show']);

// Rota para criar um novo cliente
Route::post('/clientes', [ClienteController::class, 'store']);

// Rota para atualizar informações de um cliente
Route::put('/clientes/{id}', [ClienteController::class, 'update']);

// Rota para excluir um cliente
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);


// Rotas para produtos
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);
Route::post('/produtos', [ProdutoController::class, 'store']);
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);


// Rotas para pedidos
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedidos/{id}', [PedidoController::class, 'show']);
Route::post('/pedidos', [PedidoController::class, 'store']);
Route::put('/pedidos/{id}', [PedidoController::class, 'update']);
Route::delete('/pedidos/{id}', [PedidoController::class, 'destroy']);


// Rotas para entregas
Route::get('/entregas', [EntregaController::class, 'index']);
Route::get('/entregas/{id}', [EntregaController::class, 'show']);
Route::post('/entregas', [EntregaController::class, 'store']);
Route::put('/entregas/{id}', [EntregaController::class, 'update']);
Route::delete('/entregas/{id}', [EntregaController::class, 'destroy']);


// Rotas para o carrinho de compras
Route::get('/carrinho', [CarrinhoController::class, 'index']);
Route::post('/carrinho/adicionar', [CarrinhoController::class, 'add']);
Route::put('/carrinho/atualizar/{id}', [CarrinhoController::class, 'update']);
Route::delete('/carrinho/remover/{id}', [CarrinhoController::class, 'remove']);

// Outras rotas conforme necessário...

