@extends('Layout.main')

@section('title', 'Modifica')

@section('content')

<form action="/search" method="GET">
    <input type="search" name="procura_user">
    <input type="submit" value="Pesquisar">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Excluir</th>
                <th>Alterar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pessoas as $pessoa)
                <tr>
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->nascimento_data}}</td>
                    <td>{{$pessoa->sexo}}</td>
                    <td>{{$pessoa->cpf}}</td>
                    <td>{{$pessoa->telefone}}</td>
                    <td>{{$pessoa->email}}</td>
                    <td class="text-center">
                        <form action="/delete" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja deletar este aluno?');">
                            <input type="hidden" name="guardado" value="{{$pessoa->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                    <td class="text-center">
                        <form action="/show/modify" method="GET">
                            <input type="hidden" name="idModificar" value="{{$pessoa->id}}">
                            <button type="submit" class="btn btn-danger">Alterar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>

@endsection