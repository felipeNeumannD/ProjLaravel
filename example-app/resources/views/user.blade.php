@extends('Layout.main')

@section('title', 'Cadastro Usuário')


@section('content')
<h1>Configurações do usuário</h1>
<div>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
</div>

<div>
    <label for="nascimento">Data de Nascimento:</label>
    <input type="date" id="nascimento" name="nascimento">
</div>

<div>
    <label>Sexo:</label>
    <input type="radio" id="masculino" name="sexo" value="Masculino">
    <label for="masculino">Masculino</label>

    <input type="radio" id="feminino" name="sexo" value="Feminino">
    <label for="feminino">Feminino</label>
</div>

<div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
</div>

<div>
    <label>Função:</label>
    <input type="radio" name="funcao" value="aluno">
    <input type="radio" name="funcao" value="funcionario">
</div>

@if ()

@endif

<div>
    <input type="submit" value="Enviar">
</div>
@endsection