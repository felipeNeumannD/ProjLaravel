<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class PessoaController extends Controller
{

    
    public function index(){
        return view("user");
    }

    public function index2(){
        Log::info('Método index2 foi chamado.');
        $pessoas = Pessoa::all();
        return view("modifica", compact('pessoas'));
    }

    public function search(){
        
    }

    public function store(Request $request){

        $pessoa = new Pessoa();
        $pessoa->nome = $request->input("nome");
        $pessoa->nascimento_data = $request->input("nascimento");
        $pessoa->sexo = $request->input("sexo");
        $pessoa->cpf = $request->input("cpf");
        $pessoa->telefone = $request->input("telefone");
        $pessoa->email = $request->input("email");

        $pessoa->save();

        $idPessoa = $pessoa->id;

        if($request->input("funcao") == 'aluno'){
            $aluno = new Aluno();
            $aluno->data_inicio = Carbon::today()->toDateString();
            $aluno->valor_plano = $request->input('valor');
            $aluno->descricao_plano = $request->input('descricao_plano');
            $aluno->forma_pagamento = $request->input('forma_pagamento');
            $aluno->id_pessoa = $idPessoa;
            
            $aluno->save();
              
        } else if($request->input("funcao") == 'funcionario'){
            // Log::info('Esta é uma mensagem de informação.');
            $funcionario = new Funcionario();
            $funcionario->data_contratacao = Carbon::today()->toDateString();
            $funcionario->salario = $request->input('salario');
            $funcionario->setor = $request->input('setor');
            $funcionario->funcao = $request->input('funcaoFuncionario');
            $funcionario->id_pessoa = $idPessoa;

            $funcionario->save();
        }


    }
}
