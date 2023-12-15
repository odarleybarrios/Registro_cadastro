@extends('layouts.app')

@section('conteudo')

<h1>Novo Serviço</h1>

<form action="{{route('servicos.update',$servico)}}" method="POST">
 @method('put')
@csrf
<input type="date" placeholder="Data de entrada" name="data_entrada" value="{{$servico->data_entrada}}">
<input type="date" placeholder="Data de saída" name="data_saida" value="{{$servico->data_saida}}">
<input type="number" step="0.01" placeholder="Valor" name="valor" value="{{$servico->valor}}">
<select name="cliente_id">
    @foreach ($clientes as $cliente)
 <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
    @endforeach
</select>
<button type="submit">Cadastrar</button>
</form>


@endsection
