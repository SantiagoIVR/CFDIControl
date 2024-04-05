<!--
    Autor: Bladimir - equipo 2
    Descripción: Vista de página "Mi Perfil".
-->
@extends('Sidebar')

@section('title', 'Mi Perfil') <!-- @section('title', 'Nombre de la pestaña') -->

@section('estilos_adicionales') <!-- Estilos CSS de la vista actual -->
    <link href="{{ asset('css/miperfil/miperfilstyle.css') }}" rel="stylesheet">
@endsection

@section('contenido')

    <!-- Menú Contextual -->
    <div class="nav-contextual">
        <a href="{{ route('index') }}"><span>Inicio</span></a>
        <span>></span>
        <span>Mi Perfil > Datos Básicos</span>
    </div>

    <div class="cont-submenu">
        <navbar class="submenu">
            <ul>
                <li><a class="submenu-a datos btn-activo" href="{{ route('showmiperfil') }}">
                    <span>Datos Básicos</span>
                </a></li>
                <li><a class="submenu-a seguridad btn-activo" id="cobrados" href="{{ route('showseguridad') }}">
                    <span>Seguridad</span>
                </a></li>
                </ul>
        </navbar>
    </div>

    <div class="cont-principal">
        <div class="sec-img">
            <img src="{!! asset('archivos/no-image.jpg') !!}" alt="">
            <button id="fileInputBtn" class="upload">
                <svg class="camara" version="1.0" xmlns="http://www.w3.org/2000/svg"  width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"  preserveAspectRatio="xMidYMid meet"> <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M2045 4474 c-200 -44 -361 -138 -469 -273 -60 -74 -118 -175 -136 -237 l-12 -41 -257 -6 c-221 -4 -267 -8 -336 -27 -217 -59 -396 -203 -490 -394 -89 -181 -85 -117 -85 -1221 0 -943 1 -974 20 -1051 73 -285 279 -491 564 -564 78 -20 106 -20 1716 -20 1610 0 1638 0 1716 20 245 63 438 230 531 460 53 133 53 119 53 1174 0 871 -2 987 -16 1045 -56 225 -209 406 -427 506 -130 59 -177 66 -454 72 l-252 6 -12 36 c-28 89 -94 195 -172 277 -93 99 -192 164 -315 208 l-87 31 -530 2 c-291 0 -539 -1 -550 -3z m1052 -458 c76 -35 144 -104 181 -184 24 -52 27 -70 30 -204 l4 -148 412 0 c451 0 468 -2 558 -59 26 -17 63 -52 82 -78 69 -95 67 -64 64 -1083 l-3 -915 -24 -58 c-31 -78 -110 -157 -188 -188 l-58 -24 -1560 -3 c-1134 -2 -1576 0 -1620 8 -120 23 -213 98 -257 209 l-23 56 0 935 0 935 33 67 c38 77 92 130 171 167 l56 26 436 3 437 3 4 152 c4 140 6 156 31 207 46 96 142 175 244 199 21 5 238 9 483 8 l445 -2 62 -29z"/>
                    <path d="M3833 3221 c-88 -23 -171 -99 -199 -184 -24 -73 -15 -181 19 -240 95 -161 308 -195 445 -72 150 135 118 381 -60 471 -53 27 -151 39 -205 25z"/> <path d="M2485 3154 c-228 -34 -410 -125 -553 -279 -154 -166 -232 -368 -232 -600 0 -247 82 -445 255 -619 174 -176 372 -258 620 -259 513 -1 908 412 882 923 -13 248 -120 468 -306 627 -90 77 -240 154 -354 183 -76 19 -253 33 -312 24z m216 -454 c127 -39 220 -119 278 -240 35 -72 36 -79 36 -186 0 -107 -1 -112 -37 -185 -89 -180 -279 -283 -463 -252 -195 34 -343 180 -375 374 -30 178 72 374 238 458 109 55 214 65 323 31z"/> </g>
                </svg>
                <span>Subir imagen</span>
            </button>
            <input type="file" id="fileInput" style="display: none;" accept=".png, .jpeg, .jpg">
            <!-- <div class="texto">
                <p class="info">Nota: La imagen debe tener<br>
                un tamaño mínimo de 250 x 250 píxeles
                </p>
            </div> -->
        </div>

        <div class="sec-form">
            <form action="" class="datos">
                <label for="">Nombre Completo</label>
                <input type="text" class="big" name="" id="" placeholder="Ingresa el nombre (max. 50 caracteres)" maxlength="50">
                <label for="">Correo Electrónico</label>
                <input type="email" class="big" name="" id="" placeholder="Ingresa email (max. 50 caracteres)" maxlength="50">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="" id="" disabled>
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