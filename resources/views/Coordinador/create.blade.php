@extends('layout/template')

@section('title','Registro de coordinador')

@section('content')
    <main>
        <div class="container py-4">
            <h2>Registrar Coordinador</h2>
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
            <form action="{{url('coordinador')}}" method="post">
            @csrf
            {{--Datos de persona--}}
            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nombre" id="puesto" value="{{old('nombre')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="ape_pat" class="col-sm-2 col-form-label">Apellido paterno:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="ape_pat" id="ape_pat" value="{{old('ape_pat')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="ape_mat" class="col-sm-2 col-form-label">Apellido materno:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="ape_mat" id="ape_mat" value="{{old('ape_mat')}}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="titulo" class="col-sm-2 col-form-label">Titulo:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{old('titulo')}}" required>
                </div>
            </div>

            {{--Datos de coordinador--}}
            <div class="mb-3 row">
                <label for="puesto" class="col-sm-2 col-form-label">Puesto:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="puesto" id="puesto" value="{{old('puesto')}}" required>
                </div>
            </div>


            {{--Datos de contacto--}}

            <div class="mb-3 row">
                <label for="telefono_fijo" class="col-sm-2 col-form-label">Telefono fijo:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" value="{{old('telefono_fijo')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="celular" class="col-sm-2 col-form-label">Celular:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="celular" id="celular" value="{{old('celular')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="telefono_ref" class="col-sm-2 col-form-label">Telefono de referencia:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="telefono_ref" value="{{ old('telefono_ref') }}" required>

                </div>
            </div>

            <div class="mb-3 row">
                <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="correo" id="correo" value="{{old('correo')}}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="estatus" class="col-sm-2 col-form-label">Estatus</label>
                <div class="col-sm-5">
                    <select name="estatus" id="estatus" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="activo" {{ old('estatus') == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ old('estatus') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{url('menu')}}" class="btn btn-success">Cancelar</a>

            </form>
        </div>
    </main>
@endsection
