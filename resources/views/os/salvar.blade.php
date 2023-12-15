@extends('layouts.app')

@section('conteudo')

<h1>Novo Serviço</h1>

<form action="{{route('servicos.store')}}" method="POST">
@csrf
<input type="text" placeholder="Descrição" name="descricao">
<input type="text" placeholder="Defeito" name="defeito">
<input type="number" step="0.01" placeholder="Valor" name="valor">
<select name="aparelho_id">
    @foreach ($aparelhos as $aparelho)
 <option value="{{$aparelho->id}}">{{$aparelho->tipo}}</option>
    @endforeach
</select>
<select name="cliente_id">
    @foreach ($servicos as $servico)
 <option value="{{$servico->id}}">{{$servico->id}} - {{$servico->cliente->nome}}</option>
    @endforeach
</select>
<button type="submit">Cadastrar</button>
</form>


@endsection
