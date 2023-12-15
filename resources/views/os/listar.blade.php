@extends('layouts.app')

@section('conteudo')

<h1>Ordem de serviço</h1>

<section class="d-flex justify-content-center">
    <table>
    @foreach ($vetor as $ordem_servico)

    <tr>
        <td>{{$ordem_servico->descricao}}</td>

        <td>{{$ordem_servico->defeito}}</td>

        <td>{{$ordem_servico->valor}}</td>

        <td><a href="{{route('ordem_servicos.show',$ordem_servico)}}" class="btn btn-secondary">Visualizar</a></td>
        <td><a href="{{route('ordem_servicos.edit',$ordem_servico)}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{route('oredem_servicos.destroy',$ordem_servico)}}" method="POST">
                @csrf @method('delete')
                <button class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>


    @endforeach
</table>
</section>


@endsection
