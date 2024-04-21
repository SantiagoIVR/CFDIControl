<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recuperar-Contraseña</title>
  
  <link rel="stylesheet" href="css/recuperarcontrasena.css">
  <link rel="icon" href="{!! asset ('archivos/favicon.ico') !!}" type="image/x-icon">
  
</head>
<body>
    <div class="cont-principal">
        <form action="{{route('validar')}}" method="POST" class="formulario">
        {{ csrf_field() }}
            <div class="titulo">
                <p>Recuperar Contraseña</p>
            </div>
            <label for="">Ingrese correo electrónico</label>
            @if($errors->first('correo'))
            <p class="text-warning">{{$errors->first('correo')}}</p>
            @endif
            <input type="text" class="big" name="correo"  placeholder="Ingresa correo">
            <label for="">Fecha de Nacimiento</label>
            @if($errors->first('fecha_nac'))
            <p class="text-warning">{{$errors->first('fecha_nac')}}</p>
            @endif
            <input type="date" name="fecha_nac" >
            <center><a href="{{route('loginView')}}">Iniciar Sesión</a></center>
            <div class="btn">
                <input type='submit' name = 'Guardar' value = 'Guardar'>
                
            </div>
        </form>
        
    </div>   
</body>
</html>