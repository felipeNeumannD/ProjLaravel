@extends('Layout.main')

@section('title','Teste')


@section('content')
<h1>Deu certo</h1>
    @foreach ($pessoa as $pessoa2)
        <p>{{$pessoa2->nome}}</p>
    @endforeach
@endsection



