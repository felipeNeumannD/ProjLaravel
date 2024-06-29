<?php

use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\PessoaController;
use App\Http\Controllers\HomeController;


Route::get("/teste", function(){
    return view("teste");
});

Route::get('/user', function () {
    return view('user');
});



Route::view('/teste', 'teste');



Route::get("/user", [PessoaController::class,"index"])->name("user");
Route::get("/pessoa/create", [PessoaController::class,"create"]);
Route::post("/pessoaCad", [PessoaController::class,'store']);



// Defina a rota 'home' como a raiz do site
Route::get('/', [HomeController::class, 'index'])->name('home');

