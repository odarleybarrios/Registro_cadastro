@extends('layouts.app')

@section('conteudo')

<h1>Novo Serviço</h1>

<form action="{{route('servicos.store')}}" method="POST">
@csrf
<input type="date" placeholder="Data de entrada" name="data_entrada">
<input type="date" placeholder="Data de saída" name="data_saida">
<input type="number" step="0.01" placeholder="Valor" name="valor">
<select name="cliente_id">
    @foreach ($clientes as $cliente)
 <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
    @endforeach
</select>
<button type="submit">Cadastrar</button>
</form>


@endsection
