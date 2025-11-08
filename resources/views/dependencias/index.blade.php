
<h1>Dependencias</h1>
<a href="{{ route('dependencias.create') }}">Crear nueva dependencia</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Sector</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    @foreach($dependencias as $dep)
    <tr>
        <td>{{ $dep->id_Dependencia }}</td>
        <td>{{ $dep->usuario_Depen }}</td>
        <td>{{ $dep->sector_Depen }}</td>
        <td>{{ $dep->telefono_Depen }}</td>
        <td>{{ $dep->email_Depen }}</td>
        <td>
            <a href="{{ route('dependencias.edit', $dep->id_Dependencia) }}">Editar</a>
            <form action="{{ route('dependencias.destroy', $dep->id_Dependencia) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar?')">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

