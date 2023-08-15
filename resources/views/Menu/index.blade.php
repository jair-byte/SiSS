@extends('layout/template')

@section('title', 'Menu de direccionamiento')

@section('content')

<main>
    <div class="container py-4">
        <h2>Menú de direccionamiento</h2>
        <table style="text-align: left" class="table table-hover">
            <thead>
                <tr>
                    <th>Proyectos ofertados</th>
                    <th>Coordinadores</th>
                    <th>Areas</th>
                </tr>
            </thead>
            <tbody>
                {{--PROYECTOS OFERTADOS--}}
                <td>
                    <li><a href="{{url('proyectos_ofertados/create')}}">Registrar proyecto</a></li>
                    <li><a href="{{url('proyectos_ofertados')}}">Ver Proyectos</a></li>
                </td>
                {{--COORDINADORES--}}
                <td>
                    <li><a href="{{url('coordinador/create')}}">Registrar coordinador</a></li>
                    <li><a href="{{url('coordinador')}}">Ver coordinadores</a></li>
                </td>
                {{--AREAS--}}
                <td>
                    <li><a href="{{url('area/create')}}">Registrar Area</a></li>
                    <li><a href="{{url('area')}}">Ver Areas</a></li>
                </td>
            </tbody>
        </table>

    </div>
</main>

@endsection
