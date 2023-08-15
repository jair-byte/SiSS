@extends('layout/template')

@section('title','Editar de coordinador')

@section('content')
    <main>
        <div class="container py-4">
            <h2>Editar Coordinador</h2>
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
            <form action="{{url('coordinador/'.$coordinador->idcoordinador)}}" method="post">
                @method("PUT")
                @csrf
                {{--Datos de persona--}}
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$coordinador->persona->nombre}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ape_pat" class="col-sm-2 col-form-label">Apellido paterno:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="ape_pat" id="ape_pat" value="{{$coordinador->persona->ape_pat}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ape_mat" class="col-sm-2 col-form-label">Apellido materno:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="ape_mat" id="ape_mat" value="{{$coordinador->persona->ape_mat}}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="titulo" class="col-sm-2 col-form-label">Titulo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="titulo" id="titulo" value="{{$coordinador->persona->titulo}}" required>
                    </div>
                </div>

                {{--Datos de coordinador--}}
                <div class="mb-3 row">
                    <label for="puesto" class="col-sm-2 col-form-label">Puesto:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="puesto" id="puesto" value="{{$coordinador->puesto}}" required>
                    </div>
                </div>


                {{--Datos de contacto--}}

                <div class="mb-3 row">
                    <label for="telefono_fijo" class="col-sm-2 col-form-label">Telefono fijo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" value="{{$coordinador->contacto->telefono_fijo}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="celular" class="col-sm-2 col-form-label">Celular:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="celular" id="celular" value="{{$coordinador->contacto->celular}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="telefono_ref" class="col-sm-2 col-form-label">Telefono de referencia:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono_ref" value="{{$coordinador->contacto->telefono_ref}}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="correo" class="col-sm-2 col-form-label">Correo:</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" name="correo" id="correo" value="{{$coordinador->contacto->correo}}" required>
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

                <a href="{{url('coordinador')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>
@endsection

