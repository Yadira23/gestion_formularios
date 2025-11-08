<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RespuestaTurismo;

class FormularioTurismoController extends Controller
{
    public function guardar(Request $request)
{
    RespuestaTurismo::create([
        'region' => $request->region,
        'total_turistas' => $request->total_turistas
    ]);

    return response()->json(['success' => true]);
}

}
