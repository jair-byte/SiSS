@extends('layout/template')

@section('title','Registro de areas')

@section('content')
    <main>
        <div class="container py-4">
            <h2>Registrar area</h2>
            @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <form action="{{url('area')}}" method="post">
            @csrf

            <div class="mb-3 row">
                <label for="nombre_area" class="col-sm-2 col-form-label">Nombre del area</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre_area" id="nombre_area" value="{{old('nombre_area')}}" required>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{url('menu')}}" class="btn btn-success">Cancelar</a>

            </form>

        </div>
    </main>
@endsection
