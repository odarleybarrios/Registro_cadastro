@extends('layouts.app')

@section('conteudo')

<h1>Nova ordem de serviço</h1>

<form action="{{route('ordem_servicos.store')}}" method="POST">
@csrf
<input type="text" placeholder="Descrição" name="descricao">
<input type="text" placeholder="Defeito" name="defeito">
<input type="number" step="0.01" placeholder="Valor" name="valor">
<select name="aparelho_id">
    @foreach ($aparelhos as $aparelho)
 <option value="{{$aparelho->id}}">{{$aparelho->tipo}}</option>
    @endforeach
</select>
<input type="hidden" name="servico_id" value="{{$id}}">
<button type="submit">Cadastrar</button>
</form>


@endsection
