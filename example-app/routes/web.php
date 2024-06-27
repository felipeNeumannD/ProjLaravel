<?php

use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\PessoaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\EquipamentoController;


Route::get('/hello', function () {
    return 'Hello, World!';
});


// Route::get("/user", [PessoaController::class,"index"]);
// Route::get("/events/create", [PessoaController::class,"create"]);

Route::get('/teste', function () {
    return view('teste');
});


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('aluno', AlunoController::class);
Route::resource('funcionario', FuncionarioController::class);
Route::resource('plano', PlanoController::class);
Route::resource('equipamento', EquipamentoController::class);
