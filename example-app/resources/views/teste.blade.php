@extends('layouts.main')

@section('title', 'Lista de Alunos')

@section('content')
    <div class="container">
        <h1 class="mt-4">Lista de Alunos</h1>
        <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Adicionar Aluno</a>
        
        @if($alunos->isEmpty())
            <p>Não há alunos cadastrados.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Data de Início</th>
                        <th>Forma de Pagamento</th>
                        <th>Plano</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->id }}</td>
                            <td>{{ $aluno->relacionaPessoa->nome }}</td>
                            <td>{{ $aluno->data_inicio }}</td>
                            <td>{{ $aluno->forma_pagamento }}</td>
                            <td>{{ $aluno->relacionaPlano->descricao }}</td>
                            <td>
                                <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
