<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClienteController extends Controller
{

    public function index(): View
    {
        return view('cliente', ['clientes' => Cliente::all()]);
    }

    public function save(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->documento = $request->documento;
        $cliente->telefone = $request->telefone;
        $cliente->endereço = $request->endereço;

        $cliente->save();

        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());

        return redirect('/');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/');
    }
    public function create()
    {
        return view('cliente.create');
    }
    public function show($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.show', compact('cliente'));
    }
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('cliente.edit', compact('cliente'));
    }
}
