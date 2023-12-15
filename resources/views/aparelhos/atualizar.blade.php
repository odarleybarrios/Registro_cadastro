@extends('layouts.app')

@section('conteudo')

<h1>Novo Aparelho</h1>

<form action="{{route('aparelhos.update',$aparelho)}}" method="POST">
 @method('put')
@csrf
<input type="text" placeholder="Tipo" name="tipo" value="{{$aparelho->tipo}}">
<input type="text" placeholder="Marca/modelo" name="marca_modelo" value="{{$aparelho->marca_modelo}}">
<select name="cliente_id">
    @foreach ($clientes as $cliente)
 <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
    @endforeach
</select>
<button type="submit">Cadastrar</button>
</form>


@endsection
