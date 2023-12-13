@extends('layouts.app')

@section('conteudo')

<h1>Usuário</h1>

<a href="{{route('usuarios.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $usuario)

    <p>
        {{$usuario->name}}

        {{$usuario->email}}

    </p>

    @endforeach
</section>
@endsection
