<h1>Crear Dependencia</h1>

@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li style="color:red">{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('dependencias.store') }}" method="POST">
    @csrf

    <label for="usuario_Depen">Usuario:</label>
    <input type="text" id="usuario_Depen" name="usuario_Depen" required><br>

    <label for="sector_Depen">Sector:</label>
    <select name="sector_Depen" id="sector_Depen" required>
        <option value="">-- Selecciona un sector --</option>
        @foreach($sectoresPosibles as $sector)
            <option value="{{ $sector }}" 
                @if(in_array($sector, $sectoresExistentes)) disabled @endif>
                {{ $sector }}
                @if(in_array($sector, $sectoresExistentes)) (Ya existe) @endif
            </option>
        @endforeach
    </select><br>

    <label for="telefono_Depen">Teléfono:</label>
    <input type="text" id="telefono_Depen" name="telefono_Depen"><br>

    <label for="extension_Depen">Extensión:</label>
    <input type="text" id="extension_Depen" name="extension_Depen"><br>

    <label for="email_Depen">Email:</label>
    <input type="email" id="email_Depen" name="email_Depen"><br>

    <label for="calle_Depen">Calle:</label>
    <input type="text" id="calle_Depen" name="calle_Depen"><br>

    <label for="numero_Depen">Número:</label>
    <input type="text" id="numero_Depen" name="numero_Depen"><br>

    <label for="colonia_Depen">Colonia:</label>
    <input type="text" id="colonia_Depen" name="colonia_Depen"><br>

    <label for="cp_Depen">CP:</label>
    <input type="text" id="cp_Depen" name="cp_Depen"><br>

    <button type="submit">Guardar</button>
</form>