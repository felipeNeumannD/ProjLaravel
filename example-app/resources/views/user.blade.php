@extends('Layout.main')

@section('title', 'Cadastro Usuário')

@section('content')
<h1>Configurações do usuário</h1>
<form action="/pessoaCad" method="POST">
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
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone">
    </div>
    
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
    </div>

    

    <div>
        <label>Função:</label>
        <input type="radio" id="alunoRadio" name="funcao" value="aluno">
        <label for="alunoRadio">Aluno</label>

        <input type="radio" id="funcionarioRadio" name="funcao" value="funcionario">
        <label for="funcionarioRadio">Funcionário</label>
    </div>

    <div id="funcionarioFields" style="display: none;">
        <label>Salário:</label>
        <input type="number" name="salario">

        <label>Setor:</label>
        <input type="text" name="setor">

        <label>Função:</label>
        <input type="text" name="funcaoFuncionario">
    </div>

    <div id="alunoFields" style="display: none;">
        <label>Forma de Pagamento:</label>
        <input type="radio" name="forma_pagamento" value="pix"> Pix
        <input type="radio" name="forma_pagamento" value="credito"> Crédito
        <input type="radio" name="forma_pagamento" value="debito"> Débito
        <input type="radio" name="forma_pagamento" value="dinheiro"> Dinheiro
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>
</form>


    <script src="{{asset('js/scriptUser.js')}}"></script>

@endsection
