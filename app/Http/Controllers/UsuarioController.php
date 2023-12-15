<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vetor = \App\Models\Usuario::all();
        return view('usuarios.listar',compact('vetor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.salvar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name= $request->nome;
        $usuario->email= $request->email;
        $usuario->password= $request->senha;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.visualizar',compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.atualizar',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->name= $request->nome;
        $usuario->email= $request->email;
        $usuario->password= $request->senha;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuarios.index');
    }
}
