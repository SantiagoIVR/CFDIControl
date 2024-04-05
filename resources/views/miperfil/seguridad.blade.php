<!--
    Autor: Bladimir - equipo 2
    Descripción: Vista de página "Mi Perfil > Seguridad".
-->
@extends('Sidebar')

@section('title', 'Mi Perfil') <!-- @section('title', 'Nombre de la pestaña') -->

@section('estilos_adicionales') <!-- Estilos CSS de la vista actual -->
    <link href="{{ asset('css/miperfil/seguridadstyle.css') }}" rel="stylesheet">
@endsection



@section('contenido')

    <!-- Menú Contextual -->
    <div class="nav-contextual">
        <a href="{{ route('index') }}"><span>Inicio</span></a>
        <span>></span>
        <span>Mi Perfil > Seguridad</span>
    </div>

    <!-- Submenú de Pestañas -->
    <div class="cont-submenu">
        <navbar class="submenu">
            <ul>
                <li><a class="submenu-a datos btn-activo" href="{{ route('showmiperfil') }}">
                    <span>Datos Básicos</span>
                </a></li>
                <li><a class="submenu-a seguridad btn-activo" id="cobrados" href="#">
                    <span>Seguridad</span>
                </a></li>
                </ul>
        </navbar>
    </div>

    <!-- Contenedor Principal -->
    <div class="cont-principal">
        <div class="sec-img">
            <img src="{!! asset('archivos/no-image.jpg') !!}" alt="">
        </div>

        <div class="sec-form">
            <form action="" class="datos">
                <label for="">Usuario</label>
                <input type="text" class="big" name="" id="" placeholder="Ingresa usuario" maxlength="50">
                <label for="">Contraseña</label>
                <input type="password" class="big" name="" id="" placeholder="Ingresa contraseña" maxlength="50">
                <div class="btn">
                    <input type='submit' name = 'Actualizar' value = 'Actualizar'>
                </div>
            </form>
        </div>
    </div>

@stop
 
@section('scripts') <!-- Estilos JavaScript de la vista actual -->
    <script src="{!! asset('js/miperfil/activar-btn-miperfil.js') !!}"></script>
    <script src="{!! asset('js/miperfil/cargar-img.js') !!}"></script>
@endsection