<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        return view("user");
    }

    public function create(){
        
    }
}
