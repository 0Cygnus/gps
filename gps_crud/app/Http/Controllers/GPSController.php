<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gps;

class GpsController extends Controller
{
    // Lista todos os registros de GPS
    public function index()
    {
        $gpsRecords = Gps::all();
        return response()->json($gpsRecords);
    }

    // Cria um novo registro de GPS
    public function store(Request $request)
    {
        $gpsRecord = new Gps;
        $gpsRecord->id_caminhao = $request->id_caminhao;
        $gpsRecord->lat = $request->lat;
        $gpsRecord->long = $request->long;
        $gpsRecord->horario = $request->horario;
        $gpsRecord->velocidade = $request->velocidade;
        $gpsRecord->id_carga = $request->id_carga;
        $gpsRecord->save();

        return response()->json($gpsRecord, 201);
    }

    // Atualiza um registro de GPS pelo ID
    public function update(Request $request, $id)
    {
        $gpsRecord = Gps::findOrFail($id);
        $gpsRecord->id_caminhao = $request->id_caminhao;
        $gpsRecord->id_carga = $request->id_carga;
        $gpsRecord->save();

        return response()->json($gpsRecord, 200);
    }

    // Exclui um registro de GPS pelo ID
    public function destroy($id)
    {
        $gpsRecord = Gps::findOrFail($id);
        $gpsRecord->delete();

        return response()->json(null, 204);
    }
}
