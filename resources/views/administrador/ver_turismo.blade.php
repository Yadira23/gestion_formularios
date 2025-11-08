<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de Turismo</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #f3f4f6; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #007bff; color: white; }
    </style>
</head>
<body>
    <h2>Datos del formulario Turismo</h2>

    @if($datos)
        <table>
            <thead>
                <tr>
                    @foreach(array_keys($datos[0]) as $columna)
                        <th>{{ $columna }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $fila)
                    <tr>
                        @foreach($fila as $valor)
                            <td>{{ $valor }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay datos registrados.</p>
    @endif

</body>
</html>
