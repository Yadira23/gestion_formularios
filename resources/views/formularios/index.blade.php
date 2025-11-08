
<h1>Formularios</h1>
<a href="{{ route('formularios.create') }}">Crear nuevo formulario</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Fecha Creación</th>
        <th>Botón Acción</th>
        <th>Secciones</th>
        <th>Periodo</th>
        <th>Dependencia</th>
        <th>Acciones</th>
    </tr>
    @foreach($formularios as $form)
    <tr>
        <td>{{ $form->id_Formulario }}</td>
        <td>{{ $form->titulo_Formulario }}</td>
        <td>{{ $form->descripcion_Form }}</td>
        <td>{{ $form->fechacreacion_Form }}</td>
        <td>{{ $form->botonaccion_Form }}</td>
        <td>{{ $form->secciones_Form }}</td>
        <td>{{ $form->periodo_Form }}</td>
        <td>{{ $form->dependencia->usuario_Depen ?? 'Sin dependencia' }}</td>
        <td>
            <a href="{{ route('formularios.edit', $form->id_Formulario) }}">Editar</a>
            <form action="{{ route('formularios.destroy', $form->id_Formulario) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar?')">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

