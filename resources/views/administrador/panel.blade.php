<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">

    <h2 class="mb-4 text-center">Panel de Administrador</h2>

    {{-- TARJETA DE DEPENDENCIAS --}}
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="card-title">Dependencias Registradas</h5>

            <div class="row">
                @foreach($dependencias as $dep)
                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dep->sector_Depen }}</h5>
                            <p class="card-text">
                                <strong>Usuario:</strong> {{ $dep->usuario_Depen }}<br>
                                <strong>Teléfono:</strong> {{ $dep->telefono_Depen }}<br>
                                <strong>Email:</strong> {{ $dep->email_Depen }}
                            </p>
                            
                            <a href="{{ route('dependencias.edit', $dep->id_Dependencia) }}" class="btn btn-primary btn-sm">Editar</a>

                            <form action="{{ route('dependencias.destroy', $dep->id_Dependencia) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar?')">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <a href="{{ route('dependencias.create') }}" class="btn btn-success mt-3">Agregar Nueva Dependencia</a>
        </div>
    </div>


    {{-- TARJETA DE FORMULARIOS --}}
    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Formularios</h5>
            <p class="card-text">Haz clic para ver las respuestas recopiladas en cada dependencia.</p>

            <a href="{{ route('administrador.turismo.respuestas') }}" class="btn btn-info">
                Ver respuestas del Formulario de Turismo
            </a>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
