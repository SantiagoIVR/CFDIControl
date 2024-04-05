<!--
    Autor: Bladimir, Erick - equipo 2
    Descripción: Vista del "Inicio".
-->
@extends('Sidebar')

@section('title', 'Inicio')

@section('estilos_adicionales')
    <link href="{{ asset('css/iniciostyle.css') }}" rel="stylesheet">
@endsection

@section('contenido')

    <!-- Menú Contextual -->
    <div class="nav-contextual">
        <a href="{{ route('index') }}"><span>Inicio</span></a>
        <button onclick="mostrarEquipo()" style="margin-top: 20px;">Mostrar Equipo de Desarrollo</button>
    </div>

    <div class="cont-principal">
        <div class="cont-top">
            <div class="cont-derch">
                <div class="cont-img">
                    <img src="{!! asset('archivos/no-image.jpg') !!}" alt="">
                </div>
                <div class="cont-valores">
                    <h2>Valores</h2>
                    <ul>
                        <li>Confianza</li>
                        <li>Cortesía</li>
                        <li>Honestidad</li>
                        <li>Puntualidad</li>
                        <li>Confidencialidad</li>
                    </ul>
                </div>
            </div>

            <div class="cont-izq">
                <div class="cont-mision">
                    <h2>Misión</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam laudantium dignissimos ad rem corporis nemo quod libero laboriosam recusandae, delectus deserunt sequi enim nisi quia culpa nam eaque distinctio non.</p>
                </div>
                <div class="cont-vision">
                    <h2>Visión</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nostrum cum debitis laboriosam distinctio excepturi tempora architecto mollitia eaque, eum dignissimos, culpa hic voluptas! Modi quae esse eligendi fugit pariatur.</p>
                </div>
            </div>
        </div>

        <div class="cont-bottom">
            <div class="cont-man-usuario">
                <button class="pdf-btn">
                    <h2>Manual de Usuario</h2>
                    <img src="{!! asset('archivos/pdf_download.png') !!}" alt="">
                </button>
                <textarea class="infografia"name="" id="" cols="30" rows="10" placeholder="Infografía"></textarea>
            </div>
            <div class="cont-man-tec">
                <button class="pdf-btn">
                    <h2>Manual Técnico</h2>
                    <img src="{!! asset('archivos/pdf_download.png') !!}" alt="">
                </button>
                <textarea class="infografia"name="" id="" cols="30" rows="10" placeholder="Infografía"></textarea>
            </div>
            <div class="cont-lic">
                <button class="pdf-btn">
                    <h2>Licencia</h2>
                    <img src="{!! asset('archivos/pdf_download.png') !!}" alt="">
                </button>
            </div>
        </div>
    </div>

    <!-- Espacio para mostrar el equipo de desarrollo -->
    <div id="equipoDeDesarrollo" style="display: none;" class="equipo">
        <div class="logo-universidad-container">
            <img class="logo-universidad" src="!! asset('archivos/escudoupp.png') !!}" alt="Logo de la universidad">
            <p class="nombre-universidad">UNIVERSIDAD POLITÉCNICA DE PUEBLA</p>
        </div>
        <h2>SCRUM TEAM</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Nombre Completo</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jonathan Hernández Nocelotl</td>
                    <td>Product Owner</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Diana Aylin González Romero</td>
                    <td>Scrum Master & DBA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Johanna Rocha Santiago</td>
                    <td>Back End & Architect Solution</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Laura Felipa Reyes Medel</td>
                    <td>Analyst & QA</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Gabriel De Aquino Nocelotl</td>
                    <td>Analyst</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Javier Adolfo Sánchez Espinoza</td>
                    <td>Front End & Back End</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Mario Pérez Hernández</td>
                    <td>Front End</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Joshua Dereck Diaz Downham</td>
                    <td>Scrum Master & DBA</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Isuli Yamell Luna Robles</td>
                    <td>Analyst & Front End</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Jose Bladimir Cielo Cuautle</td>
                    <td>Front End</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Leonardo Hernández Suarez</td>
                    <td>DBA & Back End</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Santiago Izquierdo Varela</td>
                    <td>Back End & Architect Solution</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Erick Benjamín Salmoran</td>
                    <td>Back End</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Cathia Arlette Juarez Ramirez</td>
                    <td>QA</td>
                </tr>
            </tbody>
        </table>
        <p class="descripcion">DESAROLLO DE SOFTWARE: El software se desarrolló con la colaboración de todo el SCRUM TEAM.</p>
        <h2>SCRUM GOAL</h2>
        <p class="scrum-goal">El objetivo de SCRUM es realizar un marco de administración que los equipos utilizan para organizarse por cuenta propia y trabajar en aras de alcanzar un objetivo común. Describe un conjunto de reuniones, herramientas y funciones para entregar proyectos de forma eficiente.</p>
    </div>

    <!-- Script para mostrar/ocultar el equipo de desarrollo -->
    <script>
        function mostrarEquipo() {
            var equipoDeDesarrollo = document.getElementById("equipoDeDesarrollo");
            if (equipoDeDesarrollo.style.display === "none") {
                equipoDeDesarrollo.style.display = "block";
            } else {
                equipoDeDesarrollo.style.display = "none";
            }
        }
    </script>
@stop