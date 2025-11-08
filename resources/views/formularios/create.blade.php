
<h1>Crear Formulario</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('formularios.store') }}" method="POST">
    @csrf
    Título: <input type="text" name="titulo_Formulario"><br>
    Descripción: <input type="text" name="descripcion_Form"><br>
    Fecha Creación: <input type="date" name="fechacreacion_Form"><br>
    Botón Acción: <input type="text" name="botonaccion_Form"><br>
    Secciones: <input type="number" name="secciones_Form"><br>
    Periodo: <input type="text" name="periodo_Form"><br>
    Dependencia:
    <select name="id_Dep">
        @foreach($dependencias as $dep)
        <option value="{{ $dep->id_Dependencia }}">{{ $dep->usuario_Depen }}</option>
        @endforeach
    </select><br>
    <button type="submit">Guardar</button>
</form>
