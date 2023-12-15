@extends('layouts.app')

@section('conteudo')

<h1>Aparelhos</h1>

<a href="{{route('aparelhos.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    <table class="table">
    @foreach ($vetor as $aparelho)

    <tr>
        <td>{{$aparelho->tipo}}</td>

        <td>{{$aparelho->marca_modelo}}</td>

        <td><a href="{{route('aparelhos.show',$aparelho)}}" class="btn btn-secondary">Visualizar</a></td>
        <td><a href="{{route('aparelhos.edit',$aparelho)}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{route('aparelhos.destroy',$aparelho)}}" method="POST">
                @csrf @method('delete')
                <button class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>
</section>


@endsection

