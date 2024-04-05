<!--
    Autor: Bladimir - equipo 2
    Descripción: Vista de página "Ingresos".
-->
@extends('Sidebar')

@section('title', 'Ingresos')

@section('estilos_adicionales')
    <link href="{{ asset('css/ingresos/consultaingresos.css?v=2') }}" rel="stylesheet">
@endsection

@section('contenido')

    <!-- Menú Contextual -->
    <div class="nav-contextual">
        <a href="{{ route('index') }}"><span>Inicio</span></a>
        <span>></span>
        <span>Consulta de Ingresos</span>
    </div>

    <!-- Contenido Principal -->
    <a href="{{ route('nuevoingreso') }}">
            <button type="button" class="btn-outline"><b>Nuevo Registro</b></button>
        </a>
        <div class="cont-estatus-principal">
            <div class="filtros">
                <div class="fil-izquierda">
                    <label for="">Filtrar por:</label>
                    <select name="" id="">
                        <option value="">Estatus de cobro</option>
                    </select>
                    <input type="text" name="" id="" placeholder="Buscar">
                </div>
                <div class="fil-derecha">
                    <select name="" id="">
                        <option value="">Mes</option>
                    </select>
                    <select name="" id="">
                        <option value="">Año</option>
                    </select>
                </div>
            </div>
            <div class="filtros-bottom">
                <button>Exportar a Excel</button>
                <div class="periodo">
                    <label for="">Desde:</label>
                    <input type="date" name="" id="">
                    <label for="">Hasta:</label>
                    <input type="date" name="" id="">
                </div>
            </div>
            <div class="tabla">
                <table class="tb-estatus">
                    <tr>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th>Concepto</th>
                        <th>Monto</th>
                        <th class="select">Método Pago</th>
                    </tr>
                    <tr>
                        <td>21-05-2022</td>
                        <td class="desborde">Empresa de Transmisión Eléctrica S.A.</td>
                        <td class="desborde">Pago</td>
                        <td>$1,500.00</td>
                        <td>
                            <select name="" id="">
                                <option value="">Tarjeta crédito/débito</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

@stop
 
@section('scripts') <!-- Estilos JavaScript de la vista actual -->
    
@endsection