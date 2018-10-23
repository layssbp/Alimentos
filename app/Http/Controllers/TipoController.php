<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class TipoController extends Controller
{

    public function index()
    {
        $tipo = Tipo::All();
        return view('tipo-listar')
    }

    public function create()
    {
        return view('tipo-cadastrar');
    }

    public function store(Request $request)
    {
        $tipo = newTipo();
        $tipo->nome = $request->input('nomeTipo');
        $tipo->save();
        return redirect('/tipo-cadastar');
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
