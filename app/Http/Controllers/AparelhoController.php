<?php

namespace App\Http\Controllers;

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
        return view('aparelhos.salvar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('aparelhos.atualizar',compact('aparelho'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    } //
}
