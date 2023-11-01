<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrega;

class EntregaController extends Controller
{
    // Lista todas as entregas
    public function index()
    {
        $entregas = Entrega::all();
        return response()->json($entregas);
    }

    // Cria uma nova entrega
    public function store(Request $request)
    {
        $entrega = new Entrega;
        $entrega->carga_desc = $request->carga_desc;
        $entrega->id_cliente = $request->id_cliente;
        $entrega->cliente = $request->cliente;
        $entrega->duravel = $request->duravel;
        $entrega->prioridade = $request->prioridade;
        $entrega->save();

        return response()->json($entrega, 201);
    }

    // Atualiza uma entrega pelo ID
    public function update(Request $request, $id)
    {
        $entrega = Entrega::findOrFail($id);
        $entrega->carga_desc = $request->carga_desc;
        $entrega->id_cliente = $request->id_cliente;
        $entrega->cliente = $request->cliente;
        $entrega->duravel = $request->duravel;
        $entrega->prioridade = $request->prioridade;
        $entrega->save();

        return response()->json($entrega, 200);
    }

    // Exclui uma entrega pelo ID
    public function destroy($id)
    {
        $entrega = Entrega::findOrFail($id);
        $entrega->delete();

        return response()->json(null, 204);
    }
}
