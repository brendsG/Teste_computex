<?php

use App\Http\Controllers\TesteController;
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
    return view('welcome');
});
Route::get('/home', [TesteController::class, 'index']);
Route::get('/horario_aluno', [TesteController::class, 'horario_aluno']);
Route::get('/acesso_aluno', [TesteController::class, 'acesso_aluno']);
Route::get('/alunos', [TesteController::class, 'alunos']);
Route::get('/alunos-pdf', [TesteController::class, 'pdf']);
