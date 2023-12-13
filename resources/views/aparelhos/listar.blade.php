@extends('layouts.app')

@section('conteudo')

<h1>Aparelhos</h1>

<a href="{{route('aparelhos.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    @foreach ($vetor as $aparelho)

    <p>
        {{$aparelho->tipo}}

        {{$aparelho->marca_modelo}}

    </p>

    @endforeach
</section>


@endsection
