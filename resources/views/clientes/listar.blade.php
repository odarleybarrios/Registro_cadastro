@extends('layouts.app')

@section('conteudo')

<h1>Clientes</h1>

<a href="{{route('clientes.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    <table>
    @foreach ($vetor as $cliente)

     <tr>
        <td>{{$cliente->nome}}</td>

        <td>{{$cliente->endereco}}</td>

        <td>{{$cliente->telefone}}</td>
        <td><a href="{{route('clientes.show',$cliente)}}" class="btn btn-secondary">Visualizar</a></td>
        <td><a href="{{route('clientes.edit',$cliente)}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{route('clientes.destroy',$cliente)}}" method="POST">
                @csrf @method('delete')
                <button class="btn btn-danger">Deletar</button>
            </form>
        </td>

     </tr>

    @endforeach
</table>
</section>


@endsection
