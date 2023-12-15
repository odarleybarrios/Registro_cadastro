@extends('layouts.app')

@section('conteudo')

<h1>Novo Aparelho</h1>

<form action="{{route('aparelhos.store')}}" method="POST">
@csrf
<input type="text" placeholder="Tipo" name="tipo">
<input type="text" placeholder="Marca/modelo" name="marca_modelo">
<select name="cliente_id">
    @foreach ($clientes as $cliente)
 <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
    @endforeach
</select>
<button type="submit">Cadastrar</button>
</form>


@endsection
