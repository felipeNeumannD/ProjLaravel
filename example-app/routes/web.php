<?php

use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\PessoaController;
use App\Http\Controllers\HomeController;


//Route::view('/teste', 'teste');

// Route::get('/hello', function () {
//     return 'Hello, World!';
// });



Route::view('/teste', 'teste');



Route::get("/user", [PessoaController::class,"index"])->name("user");
Route::get("/pessoa/create", [PessoaController::class,"create"]);
Route::post("/pessoaCad", [PessoaController::class,'store']);




