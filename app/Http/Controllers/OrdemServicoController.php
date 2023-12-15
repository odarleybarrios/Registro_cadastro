<?php

namespace App\Http\Controllers;

use App\Models\Aparelho;
use App\Models\OrdemServico;
use App\Models\Servico;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vetor = \App\Models\OrdemServico::all();
        return view('os.listar',compact('vetor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $servicos=Servico::all();
        $aparelhos=Aparelho::all();
        return view('os.salvar',compact('servicos','aparelhos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ordem_servico = new OrdemServico();
        $ordem_servico->descricao = $request->descricao;
        $ordem_servico->defeito = $request->defeito;
        $ordem_servico->valor = $request->valor;
        $ordem_servico->save();
        return redirect()->route('ordem_servicos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $ordem_servico = OrdemServico::find($id);
        return view('os.visualizar',compact('ordem_servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ordem_servico = OrdemServico::find($id);
        $servicos=Servico::all();
        $aparelhos=Aparelho::all();
        return view('os.atualizar',compact('servicos','aparelhos','ordem_servico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ordem_servico = OrdemServico::find($id);
        $ordem_servico->descricao = $request->descricao;
        $ordem_servico->defeito = $request->defeito;
        $ordem_servico->valor = $request->valor;
        $ordem_servico->save();
        return redirect()->route('ordem_servicos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        OrdemServico::destroy($id);
        return redirect()->route('ordem_servicos.index');
    }
}
