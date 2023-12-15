@extends('layouts.app')

@section('conteudo')

<h1>Novo Usuário</h1>

<form action="{{route('usuarios.update',$usuario)}}" method="POST">
 @method('put')
@csrf
<input type="text" placeholder="Nome" name="nome" value="{{$usuario->name}}">
<input type="text" placeholder="Email" name="email" value="{{$usuario->email}}">
<input type="password" placeholder="Senha" name="senha">
<button type="submit">Cadastrar</button>
</form>


@endsection
