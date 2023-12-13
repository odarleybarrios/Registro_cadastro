@extends('layouts.app')

@section('conteudo')

<h1>Clientes</h1>

<section class="d-flex justify-content-center">


    <p>
        {{$cliente->nome}}

        {{$cliente->endereco}}

        {{$cliente->telefone}}

    </p>


</section>


@endsection
