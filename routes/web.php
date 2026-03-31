<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/aluno/show', [App\Http\Controllers\Aluno::class, 'show'])->name('alunos.show');

Route::get('/professor/show', [App\Http\Controllers\Aluno::class, 'professor_show'])->name('professores.show');

Route::get('/curso/show', [App\Http\Controllers\Aluno::class, 'curso_show'])->name('cursos.show');

Route::get('/componente/show', [App\Http\Controllers\Aluno::class, 'componente_show'])->name('componentes.show');

