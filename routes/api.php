<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\NotaController;

Route::get('/alunos', [AlunoController::class, 'index']);
Route::post('/alunos', [AlunoController::class, 'store']);

Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::post('/disciplinas', [DisciplinaController::class, 'store']);

Route::get('/notas/resumo', [NotaController::class, 'resumo']);