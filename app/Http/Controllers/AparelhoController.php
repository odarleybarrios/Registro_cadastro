<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Aparelho;
use Illuminate\Http\Request;

class AparelhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vetor = \App\Models\Aparelho::all();
     return view('aparelhos.listar',compact('vetor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('aparelhos.salvar',compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aparelho = new Aparelho();
        $aparelho->tipo = $request->tipo;
        $aparelho->marca_modelo = $request->marca_modelo;
        $aparelho->clientes_id = $request->cliente_id;
        $aparelho->save();
        return redirect()->route('aparelhos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aparelho=Aparelho::find($id);
        return view('aparelhos.visualizar',compact('aparelho'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aparelho=Aparelho::find($id);
        $clientes = Cliente::all();
        return view('aparelhos.atualizar',compact('aparelho','clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aparelho=Aparelho::find($id);
        $aparelho->tipo = $request->tipo;
        $aparelho->marca_modelo = $request->marca_modelo;
        $aparelho->clientes_id = $request->cliente_id;
        $aparelho->save();
        return redirect()->route('aparelhos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Aparelho::destroy($id);
        return redirect()->route('aparelhos.index');

    } //
}
