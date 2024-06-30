@extends('Layout.main')

@section('title', 'Cadastro Usuário')

@section('content')
<form action="/pessoaCad" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$pessoa->nome}}">
    </div>

    <div class="mb-3">
        <label for="nascimento" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{$pessoa->nascimento_data}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Sexo:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="masculino" name="sexo" value="Masculino">
            <label class="form-check-label" for="masculino">Masculino</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="feminino" name="sexo" value="Feminino">
            <label class="form-check-label" for="feminino">Feminino</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="cpf" class="form-label">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" value="{{$pessoa->cpf}}">
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" value="{{$pessoa->telefone}}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$pessoa->email}}">
    </div>

    <div class="mb-3">
        <label class="form-label">Função:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="alunoRadio" name="funcao" value="aluno">
            <label class="form-check-label" for="alunoRadio">Aluno</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="funcionarioRadio" name="funcao" value="funcionario">
            <label class="form-check-label" for="funcionarioRadio">Funcionário</label>
        </div>
    </div>

    <div id="funcionarioFields" class="mb-3" style="display: none;">
        <label class="form-label">Salário:</label>
        <input type="number" class="form-control" name="salario">

        <label class="form-label">Setor:</label>
        <input type="text" class="form-control" name="setor">

        <label class="form-label">Função:</label>
        <input type="text" class="form-control" name="funcaoFuncionario">
    </div>

    <div id="alunoFields" style="display: none;">
        <label class="form-label">Plano:</label>
        <input type="text" class="form-control" name="descricao_plano">
        <label class="form-label">Valor:</label>
        <input type="number" class="form-control" name="valor">
        <br>
        <label>Forma de Pagamento:</label>
        <input type="radio" name="forma_pagamento" value="pix"> Pix
        <input type="radio" name="forma_pagamento" value="credito"> Crédito
        <input type="radio" name="forma_pagamento" value="debito"> Débito
        <input type="radio" name="forma_pagamento" value="dinheiro"> Dinheiro
    </div>
@endsection