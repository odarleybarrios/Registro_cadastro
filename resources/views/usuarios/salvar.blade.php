@extends('layouts.app')

@section('conteudo')

<h1>Novo Usuário</h1>

<form action="{{route('usuarios.store')}}" method="POST">
@csrf
<input type="text" placeholder="Nome" name="nome">
<input type="text" placeholder="Email" name="email">
<input type="text" placeholder="Senha" name="senha">
<button type="submit">Cadastrar</button>
</form>


@endsection
