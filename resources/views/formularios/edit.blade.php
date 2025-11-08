
<h1>Editar Formulario</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('formularios.update', $formulario->id_Formulario) }}" method="POST">
    @csrf
    @method('PUT')
    Título: <input type="text" name="titulo_Formulario" value="{{ $formulario->titulo_Formulario }}"><br>
    Descripción: <input type="text" name="descripcion_Form" value="{{ $formulario->descripcion_Form }}"><br>
    Fecha Creación: <input type="date" name="fechacreacion_Form" value="{{ $formulario->fechacreacion_Form }}"><br>
    Botón Acción: <input type="text" name="botonaccion_Form" value="{{ $formulario->botonaccion_Form }}"><br>
    Secciones: <input type="number" name="secciones_Form" value="{{ $formulario->secciones_Form }}"><br>
    Periodo: <input type="text" name="periodo_Form" value="{{ $formulario->periodo_Form }}"><br>
    Dependencia:
    <select name="id_Dep">
        @foreach($dependencias as $dep)
        <option value="{{ $dep->id_Dependencia }}" @if($dep->id_Dependencia == $formulario->id_Dep) selected @endif>
            {{ $dep->usuario_Depen }}
        </option>
        @endforeach
    </select><br>
    <button type="submit">Actualizar</button>
</form>
