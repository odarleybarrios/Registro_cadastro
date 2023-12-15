@extends('layouts.app')

@section('conteudo')

<h1>Novo Cliente</h1>

<form action="{{route('clientes.update',$cliente)}}" method="POST">
 @method('put')
@csrf
<input type="text" placeholder="Nome" name="nome" value="{{$cliente->nome}}">
<input type="text" placeholder="Endereço" name="endereco" value="{{$cliente->endereco}}">
<input type="text" placeholder="Telefone" name="telefone" value="{{$cliente->telefone}}">
<button type="submit">Cadastrar</button>
</form>


@endsection
