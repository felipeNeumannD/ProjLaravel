<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Plano;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Exibe uma lista de todos os alunos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('teste.blade.php', compact('aluno'));
    }

   
    public function create()
    {
        $planos = Plano::all();
        return view('aluno.create', compact('plano'));
    }

    /**
     * Armazena um novo aluno recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_inicio' => 'required|date',
            'forma_pagamento' => 'required|string',
            'id_plano' => 'required|exists:plano,id',
            'id_pessoa' => 'required|exists:pessoa,id',
        ]);

        Aluno::create($request->all());

        return redirect()->route('aluno.index')
            ->with('success', 'Aluno criado com sucesso.');
    }

    /**
     * Exibe o aluno especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('aluno.show', compact('aluno'));
    }

    /**
     * Mostra o formulário para editar o aluno especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        $planos = Plano::all();
        return view('aluno.edit', compact('aluno', 'plano'));
    }

    /**
     * Atualiza o aluno especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'data_inicio' => 'required|date',
            'forma_pagamento' => 'required|string',
            'id_plano' => 'required|exists:plano,id',
            'id_pessoa' => 'required|exists:pessoa,id',
        ]);

        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());

        return redirect()->route('aluno.index')
            ->with('success', 'Aluno atualizado com sucesso.');
    }

    /**
     * Remove o aluno especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('aluno.index')
            ->with('success', 'Aluno deletado com sucesso.');
    }
}
