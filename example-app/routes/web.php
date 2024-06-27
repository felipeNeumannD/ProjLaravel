<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pessoa;
Use App\Http\Controllers\PessoaController;


//Route::view('/teste', 'teste');

// Route::get('/hello', function () {
//     return 'Hello, World!';
// });

// $pessoa = Pessoa::all();

// Route::view('/teste', 'teste', ['pessoa' => $pessoa]);



Route::get("/user", [PessoaController::class,"index"]);
Route::get("/pessoa/create", [PessoaController::class,"create"]);
Route::post("/pessoaCad", [PessoaController::class,'store']);

