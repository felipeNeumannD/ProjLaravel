<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index(){
        return view("user");
    }

    public function store(Request $request){
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input("nome");
        $pessoa->nascimento_data = $request->input("nascimento");
        $pessoa->sexo = $request->input("sexo");
        $pessoa->cpf = $request->input("cpf");
        $pessoa->telefone = $request->input("telefone");
        $pessoa->email = $request->input("email");
    }
}
