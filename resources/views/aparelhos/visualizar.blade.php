@extends('layouts.app')

@section('conteudo')

<h1>Aparelhos</h1>

<section class="d-flex justify-content-center">


    <p>
        {{$aparelho->tipo}}

        {{$aparelho->marca_modelo}}

    </p>

    
</section>


@endsection
