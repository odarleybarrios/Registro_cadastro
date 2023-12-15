@extends('layouts.app')

@section('conteudo')

<h1>Usuário</h1>

<a href="{{route('usuarios.create')}}" class="btn btn-primary">Cadastrar</a>

<section class="d-flex justify-content-center">
    <table class="table">
    @foreach ($vetor as $usuario)

   <tr>
       <td>{{$usuario->name}}</td>

        <td>{{$usuario->email}}</td>

        <td><a href="{{route('usuarios.show',$usuario)}}" class="btn btn-secondary">Visualizar</a></td>
        <td><a href="{{route('usuarios.edit',$usuario)}}" class="btn btn-warning">Editar</a></td>
        <td>
            <form action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>
</section>
@endsection
