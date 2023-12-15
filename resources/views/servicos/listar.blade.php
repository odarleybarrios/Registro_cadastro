@extends('layouts.app')

@section('conteudo')

<h1>Serviços</h1>

<a href="{{route('servicos.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    <table>
    @foreach ($vetor as $servico)
       <tr>

        <td>{{$servico->id}}</td>

        <td>{{$servico->cliente->nome}}</td>

        <td>{{$servico->data_entrada}}</td>

        <td>{{$servico->data_saida}}</td>

        <td>{{$servico->valor}}</td>
        <td><a href="{{route('servicos.show',$servico)}}" class="btn btn-secondary">Visualizar</a></td>
        <td><a href="{{route('servicos.edit',$servico)}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{route('servicos.destroy', $servico)}}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>

    </tr>

    @endforeach
 </table>
</section>


@endsection
