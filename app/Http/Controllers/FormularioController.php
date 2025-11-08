<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;
use App\Models\Dependencia;
use App\Models\RespuestaTurismo;

class FormularioController extends Controller
{
    // Mostrar todos los formularios
    public function index()
    {
        $formularios = Formulario::with('dependencia')->get();
        return view('formularios.index', compact('formularios'));
    }

    // Mostrar formulario para crear
    public function create()
    {
        $dependencias = Dependencia::all();
        return view('formularios.create', compact('dependencias'));
    }

    // Guardar formulario nuevo
    public function store(Request $request)
    {
        $request->validate([
            'titulo_Formulario' => 'required|max:100',
            'descripcion_Form' => 'nullable|max:100',
            'fechacreacion_Form' => 'required|date',
            'botonaccion_Form' => 'required|max:50',
            'secciones_Form' => 'required|integer',
            'periodo_Form' => 'required|max:20',
            'id_Dep' => 'required|exists:dependencias,id_Dependencia'
        ]);

        Formulario::create($request->all());
        return redirect()->route('formularios.index')->with('success', 'Formulario creado correctamente.');
    }

    // Mostrar formulario para editar
    public function edit(Formulario $formulario)
    {
        $dependencias = Dependencia::all();
        return view('formularios.edit', compact('formulario', 'dependencias'));
    }

    // Actualizar formulario
    public function update(Request $request, Formulario $formulario)
    {
        $request->validate([
            'titulo_Formulario' => 'required|max:100',
            'descripcion_Form' => 'nullable|max:100',
            'fechacreacion_Form' => 'required|date',
            'botonaccion_Form' => 'required|max:50',
            'secciones_Form' => 'required|integer',
            'periodo_Form' => 'required|max:20',
            'id_Dep' => 'required|exists:dependencias,id_Dependencia'
        ]);

        $formulario->update($request->all());
        return redirect()->route('formularios.index')->with('success', 'Formulario actualizado correctamente.');
    }

    // Eliminar formulario
    public function destroy(Formulario $formulario)
    {
        $formulario->delete();
        return redirect()->route('formularios.index')->with('success', 'Formulario eliminado correctamente.');
    }

    public function guardarTurismo(Request $request)
    {
        // Validar datos básicos
        $request->validate([
            'region' => 'required|string',
            'total_turistas' => 'required|integer',
        ]);

        // Guardar en la base de datos
        $respuesta = new RespuestaTurismo();
$respuesta->region = $request->region;
$respuesta->cantidad_turistas = $request->total_turistas;
$respuesta->save();


        return response()->json(['success' => true]);
    }
}
