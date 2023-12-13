@extends('layouts.app')

@section('conteudo')

<h1>Usuário</h1>

<section class="d-flex justify-content-center">


    <p>

    {{$usuario->name}}

    {{$usuario->email}}

    </p>


</section>


@endsection
