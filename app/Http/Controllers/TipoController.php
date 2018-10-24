<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class TipoController extends Controller
{

    public function index()
    {
        $tipos = Categoria::all();
        return view('/tipos', compact('tipos'));
    }

    public function create()
    {
        return view('/tipos/novo');
    }

    public function store(Request $request)
    {
        $tipo = newTipo();
        $tipo->nome = $request->input('nomeTipo');
        $tipo->save();
        return redirect('/tipos');
    }

    public function show($id)
    {
        //   
    }

    public function edit($id)
    {
        $tipo = Tipo::find($id);
        return view('tipo-editar', compact('tipo'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
