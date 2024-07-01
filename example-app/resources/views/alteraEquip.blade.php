@extends('Layout.main')

@section('title', 'Cadastro de Equipamento')

@section('content')
    <form action="/cadastroEquip" method="POST">
        @csrf
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{$equipamento->descricao}}">
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
            <input type="date" class="form-control" id="data_compra" name="data_compra" value="{{$equipamento->data_compra}}">
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor:</label>
            <input type="number" class="form-control" id="valor" name="valor" value="{{$equipamento->valor}}">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
