<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    // Lista todos os clientes
    public function index()
    {
       // $clientes = Cliente::all();
        //return response()->json($clientes);
    }

    // Cria um novo cliente
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->cliente = $request->cliente;
        $cliente->regional = $request->regional;
        $cliente->estado = $request->estado;
        $cliente->save();

        return response()->json($cliente, 201);
    }

    // Atualiza um cliente pelo ID
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->cliente = $request->cliente;
        $cliente->regional = $request->regional;
        $cliente->estado = $request->estado;
        $cliente->save();

        return response()->json($cliente, 200);
    }

    // Exclui um cliente pelo ID
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(null, 204);
    }
}
