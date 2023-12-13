@extends('layouts.app')

@section('conteudo')

<h1>Serviço</h1>

<a href="{{route('ordem_servicos.create')}}" class="btn btn-primary">Cadastrar ordem de serviço</a>

<section class="d-flex justify-content-center">


    <p>

        {{$servico->data_entrada}}

        {{$servico->data_saida}}

        {{$servico->valor}}

    </p>


</section>


@endsection
