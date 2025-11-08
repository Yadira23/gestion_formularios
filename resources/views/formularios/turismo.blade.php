<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Turismo</title>

    <!-- ✅ Incluye jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- ✅ SurveyJS -->
    <script src="https://unpkg.com/survey-jquery@1.9.102/survey.jquery.min.js"></script>
    <link href="https://unpkg.com/survey-core@1.9.102/defaultV2.min.css" rel="stylesheet"/>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            padding: 40px;
        }
        #surveyContainer {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div id="surveyContainer"></div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    fetch('/forms/Turismo.json')
        .then(response => response.json())
        .then(data => {
            const survey = new Survey.Model(data);

            survey.onComplete.add(function(sender) {
                let respuestas = sender.data;

                if (!respuestas.question1) {
                    alert("No se encontraron datos en el formulario.");
                    return;
                }

                Object.keys(respuestas.question1).forEach(regionKey => {
                    let regionNombre = regionKey === "Row 1" ? "Cañada" :
                                       regionKey === "Row 2" ? "Costa" :
                                       regionKey;

                    let totalTuristas = respuestas.question1[regionKey].cantidad_turistas;

                    $.ajax({
                        url: "{{ route('formulario.turismo.guardar') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            region: regionNombre,
                            total_turistas: totalTuristas
                        },
                        success: function(response) {
                            console.log('Guardado correctamente:', response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error al guardar:', error);
                        }
                    });
                });

                alert("✅ Respuestas guardadas correctamente");
            });

            $("#surveyContainer").Survey({ model: survey });
        })
        .catch(error => console.error('Error cargando el formulario:', error));
});
</script>

</body>
</html>

