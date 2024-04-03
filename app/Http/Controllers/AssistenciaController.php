<?php

namespace App\Http\Controllers;

use App\Models\Assistencia;
use App\Models\Cliente;
use Illuminate\Http\Request;

class AssistenciaController extends Controller
{

    public function save(Request $request) {
        dd($request->all());
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('assistencia.create', compact('clientes'));
    }

    public function show($id)
    {
        $clientes = Cliente::all();
        $assistencia = Assistencia::find($id);
        return view('assistencia.show', compact('assistencia', 'clientes'));
    }

    public function edit($id)
    {
        $clientes = Cliente::all();
        $assistencia = Assistencia::find($id);
        return view('assistencia.edit', compact('assistencia', $clientes));
    }
}
