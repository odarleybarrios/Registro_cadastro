@extends('layouts.app')

@section('conteudo')

<h1>Ordem de serviço</h1>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $ordem_servico)

    <p>
        {{$ordem_servico->descricao}}

        {{$ordem_servico->defeito}}

        {{$ordem_servico->valor}}
    </p>


    @endforeach
</section>


@endsection
