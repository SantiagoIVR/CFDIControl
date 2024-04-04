<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<main>
  
    <div class="cont-principal">
        <form action="{{ route('login') }}"  class="formulario" method="POST">
            @csrf
            <div class="titulo">
                <p>LOGIN</p>
            </div>
            <div class="image">
                <img class="rounded float-left" src="inicio.jpg" height="165" width="155">
            </div>
            <label for="usuario_correo">Nombre de Usuario o Correo</label>
            <input type="text" class="big" name="usuario_correo" id="usuario_correo" placeholder="Ingresa usuario o correo">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Ingresa la contraseña" >
            <center><a href="{{ route('recuperar')}}">Olvidaste tu contraseña?</a></center>
            @if (Session:: has('mensaje'))
            <div style="background-color: #ffcccc; border: 1px solid #ff0000; color: #ff0000; padding: 15px;">
                <strong>Error en el inicio de sesión: <br></strong> {{ Session::get('mensaje')}}
                </div>

            @endif

            <div class="btn">
                <input type='submit' name='Guardar' value='Iniciar Sesión'>
                <input type='submit' name='Cancelar' value='Cancelar'>
            </div>
        </form>
    </div>
</main>
</body>
</html>

