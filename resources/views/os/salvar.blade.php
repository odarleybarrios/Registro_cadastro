@extends('layouts.app')

@section('conteudo')

<h1>Novo Serviço</h1>

<form action="{{route('servicos.store')}}" method="POST">
@csrf
<input type="text" placeholder="Descrição" name="descricao">
<input type="text" placeholder="Defeito" name="defeito">
<input type="number" step="0.01" placeholder="Valor" name="valor">
<button type="submit">Cadastrar</button>
</form>


@endsection
