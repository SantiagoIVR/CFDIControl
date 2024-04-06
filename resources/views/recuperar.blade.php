<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar</title>
  <link rel="stylesheet" href="css/recuperarcontrasena.css">
 
</head>
<body>
    <div class="cont-principal">
        <form action="" class="formulario">
            <div class="titulo">
                <p>Recuperar Contraseña</p>
            </div>
            <label for="">Ingrese correo electrónico</label>
            <input type="text" class="big" name="" id="" placeholder="Ingresa correo">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="" id="">
            <center><a href="#">Iniciar Sesión</a></center>
            <div class="btn">
                <input type='button' name='RecuperarContraseña' value='Recuperar Contraseña' onclick='mostrarVentana()'>
             
            </div>
        </form>
        <div id="ventanaEmergente" class="ventana-emergente">
            <form action="" class="formulario-ventana">
                <label for="">Usuario</label>
                <p> Usuario1</p>
                <label for="">Contraseña</label>
                <p> 12345</p>
                <div class="btn">
                    <input type='button' value='Volver al Login' onclick='ocultarVentana()'>
                </div>
            </form>
        </div>
    </div>
    
      <!-- Estilos JavaScript del sidebar -->
      <script src="{!! asset('js/activar-boton.js') !!}"></script>
</body>
</html>