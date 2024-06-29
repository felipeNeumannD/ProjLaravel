<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PessoaController extends Controller
{

    
    public function index(){
        return view("user");
    }

    public function store(Request $request){


        $request->validate([
            'nome' => 'required|string|max:255',
            'nascimento' => 'required|date',
            'sexo' => 'required|string|max:30',
            'cpf' => 'required|string|max:14|unique:pessoa,cpf',
            'telefone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:pessoa,email',
            'funcao' => 'required|string',
            'valor' => 'required_if:funcao,aluno|numeric',
            'descricao_plano' => 'required_if:funcao,aluno|string|max:255',
            'forma_pagamento' => 'required_if:funcao,aluno|string',
        ]);





        $pessoa = new Pessoa();
        $pessoa->nome = $request->input("nome");
        $pessoa->nascimento_data = $request->input("nascimento");
        $pessoa->sexo = $request->input("sexo");
        $pessoa->cpf = $request->input("cpf");
        $pessoa->telefone = $request->input("telefone");
        $pessoa->email = $request->input("email");

        $pessoa->save();

        $idPessoa = 3;

        if($request->input("funcao") == 'aluno'){
            \Log::info('Função é aluno, criando registro de aluno.');
            $aluno = new Aluno();
            $aluno->data_inicio = Carbon::today();
            $aluno->valor_plano = $request->input('valor');
            $aluno->descricao_plano = $request->input('descricao_plano');
            $aluno->forma_pagamento = $request->input('forma_pagamento');
            $aluno->id_pessoa = $idPessoa;
            
            $aluno->save();  
        } else{
            \Log::info('Função não é');
        }
        



        return redirect('/');
    }
}
