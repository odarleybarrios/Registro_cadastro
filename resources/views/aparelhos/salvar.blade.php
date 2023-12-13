@extends('layouts.app')

@section('conteudo')

<h1>Novo Serviço</h1>

<form action="{{route('servicos.store')}}" method="POST">
@csrf
<input type="text" placeholder="Tipo" name="tipo">
<input type="text" placeholder="Marca/modelo" name="marca_modelo">
<button type="submit">Cadastrar</button>
</form>


@endsection
