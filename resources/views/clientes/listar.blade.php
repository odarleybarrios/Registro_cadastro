@extends('layouts.app')

@section('conteudo')

<h1>Clientes</h1>

<a href="{{route('clientes.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $cliente)

    <p>
        {{$cliente->nome}}

        {{$cliente->endereco}}

        {{$cliente->telefone}}
    </p>


    @endforeach
</section>


@endsection
