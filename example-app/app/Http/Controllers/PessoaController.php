<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Funcionario;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PessoaController extends Controller
{
    public function index(){
        return view("user");
    }

    public function index2(){
        $pessoas = Pessoa::all();
        return view("modificaPessoa", compact('pessoas'));
    }

    public function update(Request $request){
        // $pessoa = Pessoa::findOrFail($id);
        
        // $pessoa->nome = $request->input("nome");
        // $pessoa->nascimento_data = $request->input("nascimento");
        // $pessoa->sexo = $request->input("sexo");
        // $pessoa->cpf = $request->input("cpf");
        // $pessoa->telefone = $request->input("telefone");
        // $pessoa->email = $request->input("email");
        // $pessoa->save();

        // if($request->input("funcao") == 'aluno'){
        //     $aluno = new Aluno();
        //     $aluno->data_inicio = Carbon::today()->toDateString();
        //     $aluno->valor_plano = $request->input('valor');
        //     $aluno->descricao_plano = $request->input('descricao_plano');
        //     $aluno->forma_pagamento = $request->input('forma_pagamento');
        //     $aluno->id_pessoa = $idPessoa;
            
        //     $aluno->save();
              
        // } else if($request->input("funcao") == 'funcionario'){
        //     $funcionario = Funcionario::where('id_pessoa', $id)->first();
        //     $funcionario->data_contratacao = Carbon::today()->toDateString();
        //     $funcionario->salario = $request->input('salario');
        //     $funcionario->setor = $request->input('setor');
        //     $funcionario->funcao = $request->input('funcaoFuncionario');
            
        //     $funcionario->save();
        // }

    }

    public function index3(Request $request){
        $id = $request->input("idModificar");
        $pessoa = Pessoa::findOrFail($id);
        $aluno = Aluno::where('id_pessoa', $id)->first();
        $funcionario = Funcionario::where('id_pessoa', $id)->first();

        if (!$aluno) {
            $aluno = new Aluno();
        }
        if (!$funcionario) {
            $funcionario = new Funcionario(); 
        }

        return view("alteraPessoa", compact('pessoa','aluno','funcionario'));
    }

    public function activitySearch(){

    }

    public function search(Request $request){
        $pesquisa = $request->input("procura_user");
        $pessoas = Pessoa::where('nome', 'like', '%'.$pesquisa.'%')->get();
        return view("modificaPessoa", compact('pessoas'));
    }

    public function delete(Request $request){
        $id = $request->input("guardado");
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect()->route('show');
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
