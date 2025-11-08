<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;
use App\Models\RespuestaTurismo;

class AdministradorController extends Controller
{
    public function panel()
    {
        // Traer todas las dependencias, evitando duplicados por sector
        $dependencias = Dependencia::select('sector_Depen', 'id_Dependencia', 'usuario_Depen', 'telefono_Depen', 'email_Depen')
            ->groupBy('sector_Depen', 'id_Dependencia', 'usuario_Depen', 'telefono_Depen', 'email_Depen')
            ->get();

        return view('administrador.panel', compact('dependencias'));
    }

    public function verRespuestasTurismo()
{
    $respuestas = RespuestaTurismo::all(); // solo trae region y cantidad_turistas
 
    $destinos = ["Oaxaca", "Huatulco", "Puerto Escondido", "Istmo", "Tuxtepec"];
    $empleos = [1500, 900, 600, 400, 300];



    return view('administrador.respuestas_turismo', compact('respuestas','destinos','empleos'));
}

    
}

