<?php

use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\PessoaController;


Route::get("/teste", function(){
    return view("teste");
});

Route::get('/user', function () {
    return view('user');
});



Route::view('/teste', 'teste');



Route::get("/user", [PessoaController::class,"index"])->name("user");
Route::post("/pessoaCad", [PessoaController::class,'store']);
Route::get("/show", [PessoaController::class, 'index2'])->name("show");
Route::get('/show/search', [PessoaController::class, 'search'])->name('show.search');




