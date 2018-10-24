<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class AlimentoController extends Controller
{
    public function index()
    {
        $alimentos = Alimento::all();

    }

    public function create()
    {
        $tipo = Tipo::all();
        return view ('alimentos/novo', compact('tipo'));
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
