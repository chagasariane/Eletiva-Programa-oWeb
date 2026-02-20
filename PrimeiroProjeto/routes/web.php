<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ExercicioController;

Route::get('/paginainicial', function () {
    return view('welcome');
});

//Rota para abrir o formulário do exercício 1
Route::get('/exercicio', [ExercicioController::class, 'exibirFormulario']);
//Formulario para receber os dados do formulário do exercício 1
Route::post('/resposta', [ExercicioController::class, 'calcularSoma']);

Route::get('/exercicio2', [ExercicioController::class, 'exibirFormulario2']);
Route::post('/resposta2', [ExercicioController::class, 'calcularSub']);

Route::get('/exercicio3', [ExercicioController::class, 'exibirFormulario3']);
Route::post('/resposta3', [ExercicioController::class, 'calcularMult']);

Route::get('/exercicio4', [ExercicioController::class, 'exibirFormulario4']);
Route::post('/resposta4', [ExercicioController::class, 'calcularDiv']);