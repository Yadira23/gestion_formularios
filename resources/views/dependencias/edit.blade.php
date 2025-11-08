
<h1>Editar Dependencia</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('dependencias.update', $dependencia->id_Dependencia) }}" method="POST">
    @csrf
    @method('PUT')
    Usuario: <input type="text" name="usuario_Depen" value="{{ $dependencia->usuario_Depen }}"><br>
    Sector: <input type="text" name="sector_Depen" value="{{ $dependencia->sector_Depen }}"><br>
    Teléfono: <input type="text" name="telefono_Depen" value="{{ $dependencia->telefono_Depen }}"><br>
    Extensión: <input type="text" name="extension_Depen" value="{{ $dependencia->extension_Depen }}"><br>
    Email: <input type="email" name="email_Depen" value="{{ $dependencia->email_Depen }}"><br>
    Calle: <input type="text" name="calle_Depen" value="{{ $dependencia->calle_Depen }}"><br>
    Número: <input type="text" name="numero_Depen" value="{{ $dependencia->numero_Depen }}"><br>
    Colonia: <input type="text" name="colonia_Depen" value="{{ $dependencia->colonia_Depen }}"><br>
    CP: <input type="text" name="cp_Depen" value="{{ $dependencia->cp_Depen }}"><br>
    <button type="submit">Actualizar</button>
</form>

