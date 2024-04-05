<!--
    Autor: Bladimir - equipo 2
    Descripción: Vista para el registro de nuevos ingresos.
-->
@extends('Sidebar')

@section('title', 'Registro de Ingresos')

@section('estilos_adicionales')
    <link href="{{ asset('css/ingresos/registroingresos.css') }}" rel="stylesheet">
@endsection

@section('contenido')

    <!-- Menú Contextual -->
    <div class="nav-contextual">
        <a href="{{ route('index') }}"><span>Inicio</span></a>
        <span>></span>
        <span>Registro de Ingresos</span>
    </div>

    <!-- Contenido Principal -->
    <a href="{{ route('showmingresos') }}">
            <button type="button" class="btn-outline"><b>Consulta de Ingresos</b></button>
        </a>
        <div class="cont-principal">
            <form action="" class="fomulario">
                <div class="titulo">
                    <p>Registro de Ingresos</p>
                </div>
                <label for="">Nombre del cliente</label>
                <input type="text" class="big" name="" id="" placeholder="Ingresa el nombre (max. 50 caracteres)" maxlength="50">
                <label for="">Medio de pago</label>
                <select class="" name="" id="">
                    <option value="">Efectivo</option>
                    <option value="">Tarjeta de crédito/débito</option>
                </select>
                <label for="">Concepto de pago</label>
                <input type="text" name="" id="" placeholder="Ingresa el concepto (max. 50 caracteres)" maxlength="50">
                <label for="">Monto</label>
                <input type="text" class="medium" name="" id="" placeholder="Ingresa monto" maxlength="10">
                <label for="">Fecha</label>
                <input type="date" name="" id="">
                <div class="btn">
                    <input type='submit' name = 'Guardar' value = 'Guardar'>
                    <input type='submit' name = 'Cancelar' value = 'Cancelar'>
                </div>
            </form>
        </div>

@stop
 
@section('scripts') <!-- Estilos JavaScript de la vista actual -->
    <!--  -->
@endsection