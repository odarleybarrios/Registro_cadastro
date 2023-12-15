@extends('layouts.app')

@section('conteudo')

<h1>Novo Cliente</h1>

<form action="{{route('clientes.store')}}" method="POST">
@csrf
<input type="text" placeholder="Nome" name="nome">
<input type="text" placeholder="Endereço" name="endereco">
<input type="text" placeholder="Telefone" name="telefone">
<button type="submit">Cadastrar</button>
</form>


@endsection
