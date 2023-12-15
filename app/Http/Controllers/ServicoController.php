<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vetor = \App\Models\Servico::all();
        return view('servicos.listar',compact('vetor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('servicos.salvar',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servico = new Servico();
        $servico->data_entrada = $request->data_entrada;
        $servico->data_saida = $request->data_saida;
        $servico->valor_servico= $request->valor;
        $servico->clientes_id= $request->cliente_id;
        $servico->save();
        return redirect()->route('servicos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $servico = Servico::find($id);
        return view('servicos.visualizar',compact('servico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $servico = Servico::find($id);
        $clientes = Cliente::all();
        return view('servicos.atualizar',compact('servico','clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servico = Servico::find($id);
        $servico->data_entrada = $request->data_entrada;
        $servico->data_saida = $request->data_saida;
        $servico->valor_servico= $request->valor;
        $servico->clientes_id= $request->cliente_id;
        $servico->save();
        return redirect()->route('servicos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Servico::destroy($id);
        return redirect()->route('servicos.index');
    }
}
