<!--
    Autor: Bladimir - equipo 2
    Descripción: Vista para el estatus de los CFDI's que los clientes ya han pagado.
-->
@extends('Sidebar')

@section('title', 'Estatus CFDIs')

@section('estilos_adicionales')
    <link href="{{ asset('css/misfinanzas/estatuscfdi_pay.css') }}" rel="stylesheet">
@endsection

@section('contenido')

    <!-- Menú Contextual -->
    <div class="nav-contextual">
        <a href="{{ route('index') }}"><span>Inicio</span></a>
        <span>></span>
        <span>Estatus CFDI's > Cobrados</span>
    </div>

    <!-- Pestañas de Navegación -->
    <div class="cont-submenu">
            <navbar class="submenu">
                <ul>
                    <li><a class="submenu-a all btn-activo" href="{{ route('showcfdistatus') }}">
                        <span>Todos</span>
                    </a></li>
                    <li><a class="submenu-a pay btn-activo" id="cobrados" href="{{ route('showcfdipay') }}">
                        <span>Cobrados</span>
                    </a></li>
                </ul>
            </navbar>
        </div>
        
    <!-- Contenido Principal -->
    <div class="cont-padre">
            <div class="cont-estatus">
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
                <div class="tabla">
                    <table class="tb-estatus">
                        <tr>
                            <th>#</th>
                            <th>Folio</th>
                            <th>Cliente</th>
                            <th>Fecha Emisión</th>
                            <th>Fecha Vencimiento</th>
                            <th>Monto</th>
                            <th class="select">Estatus de Cobro</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>CF123-456</td>
                            <td class="desborde">Empresa de Transmisión Eléctrica S.A.</td>
                            <td>21-05-2022</td>
                            <td>21-05-2022</td>
                            <td>$1,500.00</td>
                            <td>
                                <select name="" id="">
                                    <option value="">Complemento de pago</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="cont-info">
                <div class="labels">
                    <label for="">Folio:</label>
                    <label for="">INV-2024-789</label>
                </div>
                <div class="carga">
                    <label for="">Cargar segunda factura CFDI</label>
                    <input type="file" id="archivo" accept=".pdf" style="display: none;">
                    <button onclick="document.getElementById('archivo').click()">Seleccionar archivo</button>
                    <label for="">Folio segunda factura:</label>
                    <label for="">F123-456</label>
                    <label for="">Monto Total:</label>
                    <input type="text" name="" id="" placeholder="$00.00">
                    <label for="">Saldo cubierto:</label>
                    <input type="text" name="" id="" placeholder="$00.00">
                    <label for="">Saldo Pendiente:</label>
                    <input type="text" name="" id="" placeholder="$00.00">
                </div>
                <div class="checks">
                    <label for="">¿Enviado a hacienda?</label>
                    <input type="checkbox">Si
                    <input type="checkbox">No
                </div>
                <div class="btn-info">
                    <input type="submit" id="accept" style="display: none;">
                    <button class="aceptar" onclick="document.getElementById('accept').click()">Guardar</button>
                    <input type="submit" id="cancel" style="display: none;">
                    <button class="cancelar" onclick="document.getElementById('cancel').click()">Cancelar</button>
                </div>
            </div>
        </div>

@stop
 
@section('scripts') <!-- Estilos JavaScript de la vista actual -->
    <script src="{!! asset('js/misfinanzas/activar-btn-cfdi.js?v=5') !!}"></script> 
@endsection