<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pessoa;


//Route::view('/teste', 'teste');

Route::get('/hello', function () {
    return 'Hello, World!';
});

$pessoa = Pessoa::all();

Route::view('/teste', 'teste', ['pessoa' => $pessoa]);    

