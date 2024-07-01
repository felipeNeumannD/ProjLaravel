@extends('Layout.main')

@section('title', 'Cadastro Equipamento')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Informações do Equipamento</h1>
    <form action="cadastroEquip" method="POST">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo:</label>
            <select class="form-select" id="tipo" name="tipo">
                <option value="Cardiovascular">Cardiovascular</option>
                <option value="Musculação">Musculação</option>
                <option value="Alongamento">Alongamento </option>
                <option value="Funcional">Funcional</option>
                <option value="Peso Livre">Peso Livre</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_compra" class="form-label">Data de Compra:</label>
            <input type="date" class="form-control" id="data_compra" name="data_compra">
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" step="0.01">
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>
@endsection
