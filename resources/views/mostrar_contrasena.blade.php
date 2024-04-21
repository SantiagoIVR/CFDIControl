<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Contraseña</title>
    <link rel="stylesheet" href="css/mostrar.css">
    <link rel="icon" href="{!! asset ('archivos/favicon.ico') !!}" type="image/x-icon">

</head>
<body>
    <!-- Ventana emergente con los datos del usuario -->
    <div class="cont-principal">
    <div class="titulo">
                <p>Recuperar Contraseña</p>
            </div>
            <div>
           
    <label>Nombre de usuario: {{ $usuario->nomb_u }}</label>
    <p>Contraseña: {{ $usuario->contraseña }}</p>
</div>
<center><a href="{{route('loginView')}}">Volver al Loguin</a></center>

    </div>



    <script>
        // Función para mostrar la ventana emergente
        function mostrarVentanaEmergente() {
            document.getElementById('ventanaEmergente').style.display = 'block';
        }

        // Llamar a la función al cargar la página (si hay datos de usuario)
        window.onload = function() {
            @if ($usuario)
                mostrarVentanaEmergente();
            @endif
        };
    </script>
</body>
</html>



