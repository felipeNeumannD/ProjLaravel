<?php

use Illuminate\Support\Facades\Route;


Route::view('/teste', 'teste');

Route::get('/hello', function () {
    return 'Hello, World!';
});
