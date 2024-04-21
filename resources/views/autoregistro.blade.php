<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{!! asset ('archivos/favicon.ico') !!}" type="image/x-icon">
  <title>Auto-Registro</title>
  <link rel="stylesheet" href="css/autoregistro.css">

</head>
<body>

  <main>
  
    <div class="cont-principal">
    <form action = "{{route('guardarregistro')}}" method= "POST">
    {{ csrf_field() }}
        
       
            <div class="titulo">
                <p>Registro Inicial</p>
            </div>
           
            <label for="">Nombre Completo</label>
            @if($errors->first('nombre'))
            <p class="text-warning">{{$errors->first('nombre')}}</p>
            @endif
            <input type="text" name="nombre" value="{{old('nombre')}}" placeholder="Ingresa el nombre (3-30 caracteres)" maxlength="30">
            <label for="">Correo Electronico</label>
            @if($errors->first('correo'))
            <p class="text-warning">{{$errors->first('correo')}}</p>
            @endif
            <input type="text" name="correo" value="{{old('correo')}}" placeholder="Ingresa Correo(15-40 caracteres)" maxlength="40">
            <label for="">Fecha de Nacimiento</label>
            @if($errors->first('fecha_nac'))
            <p class="text-warning">{{$errors->first('fecha_nac')}}</p>
            @endif
            <input type="date" name="fecha_nac" >
            <label for="">Usuario</label>
            @if($errors->first('nomb_u'))
            <p class="text-warning">{{$errors->first('nomb_u')}}</p>
            @endif
            <input type="text" class="big" name="nomb_u" value="{{old('nomb_u')}}" placeholder="Ingresa el nombre de usuario (3-10 caracteres)" maxlength="50">
            <label for="">Contraseña</label>
            @if($errors->first('contraseña'))
            <p class="text-warning">{{$errors->first('contraseña')}}</p>
            @endif
            <input type="text" name="contraseña" value="{{old('contraseña')}}" placeholder="Ingresa contraseña(8-12 caracteres)" maxlength="12">
            <div class="btn">
                <input type='submit' name = 'Guardar' value = 'Guardar'>
                
            </div>
        </form>
    </div>
</main>

</body>
</html>