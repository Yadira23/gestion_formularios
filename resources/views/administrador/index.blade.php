
    <h1>Panel del Administrador</h1>
    <p>Selecciona un sector para ver sus datos o formularios:</p>

    <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px; width: 200px;">
            <h3>Turismo</h3>
            <a href="{{ route('administrador.turismo') }}" style="background-color: #007bff; color: white; padding: 8px 12px; border-radius: 4px; text-decoration: none;">Ver datos</a>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px; width: 200px;">
            <h3>Educación</h3>
            <a href="{{ route('administrador.educacion') }}" style="background-color: #28a745; color: white; padding: 8px 12px; border-radius: 4px; text-decoration: none;">Ver datos</a>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 8px; width: 200px;">
            <h3>Salud</h3>
            <a href="{{ route('administrador.salud') }}" style="background-color: #dc3545; color: white; padding: 8px 12px; border-radius: 4px; text-decoration: none;">Ver datos</a>
        </div>
    </div>
