@extends('Layout.main')

@section('title', 'Modifica')

@section('content')

<form action="{{ route('search/equip') }}" method="GET">
    <input type="search" name="procura_equipamento">
    <input type="submit" value="Pesquisar">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Descricao</th>
                <th>Tipo</th>
                <th>Data da Compra</th>
                <th>Valor</th>
                <th>Excluir</th>
                <th>Alterar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipamentos as $equipamento)
                <tr>
                    <td>{{$equipamento->descricao}}</td>
                    <td>{{$equipamento->tipo}}</td>
                    <td>{{$equipamento->data_compra}}</td>
                    <td>{{$equipamento->valor}}</td>
                    <td class="text-center">
                        <form action="/delete/equip" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja deletar este equipamento?');">
                            <input type="hidden" name="guardado" value="{{$equipamento->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                    <td class="text-center">
                        <form action="equip/altera" method="GET">
                            <input type="hidden" name="idModificar" value="{{$equipamento->id}}">
                            <button type="submit" class="btn btn-danger">Alterar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>

@endsection