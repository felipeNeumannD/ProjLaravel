<?php

use Illuminate\Support\Facades\Route;


//Route::view('/teste', 'teste');

Route::get('/hello', function () {
    return 'Hello, World!';
});

Route::view('/teste', 'teste', ['name'=>'GTA']);    

