<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gráfica de Empleos por Destino</title>

    <!-- CDN Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
    <h2>Respuestas del Formulario de Turismo</h2>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Región</th>
                <th>Total Turistas</th>
            </tr>
        </thead>
        <tbody>
        @foreach($respuestas as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td>{{ $r->region }}</td>
                <td>{{ $r->cantidad_turistas }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <h2 style="text-align:center;">Distribución de Empleos Generados por Destino Turístico</h2>

    <div style="width: 50%; margin: auto;">
        <canvas id="graficaEmpleos"></canvas>
    </div>

    <script>
        // Datos desde Laravel (PHP → JS)
        const destinos = @json($destinos);
        const empleos = @json($empleos);

        // Sumar empleos para calcular porcentajes
        const total = empleos.reduce((a, b) => a + b, 0);

        // Calcular porcentajes aproximados
        const porcentajes = empleos.map(e => ((e / total) * 100).toFixed(1));

        // Renderizar gráfica
        const ctx = document.getElementById('graficaEmpleos').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: destinos.map((dest, i) => dest + " (" + porcentajes[i] + "%)"),
                datasets: [{
                    data: empleos,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom'
                    },
                    title: {
                        display: true,
                        text: 'Porcentaje de Empleos por Destino'
                    }
                }
            }
        });
    </script>

</body>
</html>







