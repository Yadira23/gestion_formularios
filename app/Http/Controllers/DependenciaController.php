<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    // Mostrar lista de dependencias
    public function index()
    {
        $dependencias = Dependencia::all();
        return view('dependencias.index', compact('dependencias'));
    }

    // Mostrar formulario de creación
public function create()
{
    // Traemos los sectores existentes para deshabilitarlos
    $sectoresExistentes = Dependencia::pluck('sector_Depen')->toArray();

    // Lista de todos los posibles sectores
    $sectoresPosibles = ['Turismo', 'Educación', 'Salud', 'Cultura'];

    return view('dependencias.create', compact('sectoresExistentes', 'sectoresPosibles'));
}

    // Guardar nueva dependencia
    public function store(Request $request)
{
    // ✅ Validación con unique para sector
    $request->validate([
        'usuario_Depen' => 'required|max:50',
        'sector_Depen' => 'required|max:50|unique:dependencias,sector_Depen',
        'telefono_Depen' => 'required|max:20',
        'extension_Depen' => 'nullable|max:10',
        'email_Depen' => 'required|email|max:30',
        'calle_Depen' => 'required|max:50',
        'numero_Depen' => 'required|max:10',
        'colonia_Depen' => 'required|max:50',
        'cp_Depen' => 'required|max:10',
    ], [
    'sector_Depen.unique' => 'La dependencia :input ya ha sido creada.',
]);

    $dependencia = new Dependencia();
    $dependencia->usuario_Depen = $request->usuario_Depen;
    $dependencia->sector_Depen = $request->sector_Depen;
    $dependencia->telefono_Depen = $request->telefono_Depen;
    $dependencia->extension_Depen = $request->extension_Depen;
    $dependencia->email_Depen = $request->email_Depen;
    $dependencia->calle_Depen = $request->calle_Depen;
    $dependencia->numero_Depen = $request->numero_Depen;
    $dependencia->colonia_Depen = $request->colonia_Depen;
    $dependencia->cp_Depen = $request->cp_Depen;
    $dependencia->save();

    // 🔽 Redirección según sector
    switch ($dependencia->sector_Depen) {
        case 'Turismo':
            return redirect()->route('formulario.turismo');
        case 'Educación':
            return redirect()->route('formulario.educacion');
        case 'Salud':
            return redirect()->route('formulario.salud');
        default:
            return redirect()->route('dependencias.index');
    }
}


    // Mostrar formulario de edición
    public function edit(Dependencia $dependencia)
    {
        return view('dependencias.edit', compact('dependencia'));
    }

    // Actualizar dependencia
    public function update(Request $request, Dependencia $dependencia)
    {
        $request->validate([
            'usuario_Depen' => 'required|max:50',
            'sector_Depen' => 'required|max:50',
            'telefono_Depen' => 'required|max:20',
            'extension_Depen' => 'nullable|max:10',
            'email_Depen' => 'required|email|max:30',
            'calle_Depen' => 'required|max:50',
            'numero_Depen' => 'required|max:10',
            'colonia_Depen' => 'required|max:50',
            'cp_Depen' => 'required|max:10'
        ]);

        $dependencia->update($request->all());
        return redirect()->route('dependencias.index')->with('success', 'Dependencia actualizada correctamente.');
    }

    // Eliminar dependencia
    public function destroy(Dependencia $dependencia)
    {
        $dependencia->delete();
        return redirect()->route('dependencias.index')->with('success', 'Dependencia eliminada correctamente.');
    }
}