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
Route::get('/search', [PessoaController::class, 'search'])->name('search');
Route::delete('/delete', [PessoaController::class, 'delete'])->name('delete');
Route::get("/show/modify", [PessoaController::class, 'index3'])->name("modify");
Route::put('/update', [PessoaController::class, 'update'])->name('update');





