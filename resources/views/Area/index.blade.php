@extends('layout/template')

@section('title','Areas')

@section('content')
    <main>
        <div class="container py-4">
            <h2>Areas</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre del area</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                {{--}}
                @foreach ($areas as $area)
                        <tr>
                            <td>{{$area->id}}</td>
                            <td>{{$area->nombre_area}}</td>
                            <td><a href="{{url('area/'.$area->id.'/edit')}}" class="btn btn-success btn-sm">Editar</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </main>
    {{--}}
@endsection
