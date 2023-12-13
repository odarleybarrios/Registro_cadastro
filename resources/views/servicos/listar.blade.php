@extends('layouts.app')

@section('conteudo')

<h1>Serviços</h1>

<a href="{{route('servicos.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $servico)

    <p>
        {{$servico->data_entrada}}

        {{$servico->data_saida}}

        {{$servico->valor}}
    </p>

    @endforeach
</section>


@endsection
