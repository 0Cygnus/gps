<?php

namespace App\Http\Controllers;
use App\Models\Caminhao;
use Illuminate\Http\Request;

class CaminhaoController extends Controller
{
    public function store(Request $request)
    {
        $caminhao = new Caminhao;
        $caminhao->nome_caminhao = $request->input('nome_caminhao');
        $caminhao->chassi = $request->input('chassi');
        $caminhao->placa = $request->input('placa');
        $caminhao->ano_caminhao = $request->input('ano_caminhao');
        $caminhao->status = $request->input('status');
        $caminhao->save();

    return response()->json($caminhao, 201);
    }

    public function index()
    {
        //Use o método 'all' para obter todos os registros
        $caminhoes = Caminhao::all();
    
        return response()->json($caminhoes, 200);
    }
    
    public function update($id)
    {
        $caminhao = Caminhao::find($id);
        $caminhao->nome_caminhao = 'Novo Nome do Caminhão';
        if ($caminhao) {
            // Atualize o campo 'status' para true
            $caminhao->update(['status' => false]);
    
            return 'Status do caminhão atualizado para false.';
        } else {
            return 'Caminhão não encontrado.';
        }
        $caminhao->save();

        return 'Registro de caminhão atualizado com sucesso.';
    }

    public function destroy($id)
    {
        $caminhao = Caminhao::find($id);
        $caminhao->delete();

        return 'Registro de caminhão excluído com sucesso.';
    }
};