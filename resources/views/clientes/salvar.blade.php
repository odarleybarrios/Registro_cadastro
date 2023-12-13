@extends('layouts.app')

@section('conteudo')

<h1>Novo Serviço</h1>

<form action="{{route('servicos.store')}}" method="POST">
@csrf
<input type="text" placeholder="Nome" name="nome">
<input type="text" placeholder="Endereço" name="endereco">
<input type="text" placeholder="Telefone" name="telefone">
<button type="submit">Cadastrar</button>
</form>


@endsection
