@extends('Layout.main')

@section('title', 'Modifica')

@section('content')

<input type="search" name="procura_user">

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
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
            </tr>
        @endforeach
    </tbody>
</table>

@endsection