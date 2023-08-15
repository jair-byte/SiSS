@extends('layout/template')

@section('title','Registro de proyectos')

@section('content')

<main>
    <div class="container py-4">
        <h2>Registrar proyecto</h2>
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
        <form action="{{url('proyectos_ofertados')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 row">
                <label for="tipo_proyecto" class="col-sm-2 col-form-label">Tipo de proyecto</label>
                <div class="col-sm-5">
                    <select name="tipo_proyecto" id="tipo_proyecto" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="individual" {{ old('tipo_proyecto') == 'individual' ? 'selected' : '' }}>Individual</option>
                        <option value="colectivo" {{ old('tipo_proyecto') == 'colectivo' ? 'selected' : '' }}>Colectivo</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="perfil" class="col-sm-2 col-form-label">Perfil</label>
                <div class="col-sm-5">
                    <select name="perfil" id="perfil" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="unidiciplinario" {{ old('perfil') == 'unidiciplinario' ? 'selected' : '' }}>Unidiciplinario</option>
                        <option value="multidiciplinario" {{ old('perfil') == 'multidiciplinario' ? 'selected' : '' }}>Multidiciplinario</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="duracion" class="col-sm-2 col-form-label">Duración</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="duracion" id="duracion" value="{{ old('duracion') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="estimulo" class="col-sm-2 col-form-label">Estímulo</label>
                <div class="col-sm-5">
                    <select name="estimulo" id="estimulo" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="gratis" {{ old('estimulo') == 'gratis' ? 'selected' : '' }}>Gratis</option>
                        <option value="recompensado" {{ old('estimulo') == 'recompensado' ? 'selected' : '' }}>Recompensado</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tipo_lug_part" class="col-sm-2 col-form-label">Lugar de participación</label>
                <div class="col-sm-5">
                    <select name="tipo_lug_part" id="tipo_lug_part" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="comunitario" {{ old('tipo_lug_part') == 'comunitario' ? 'selected' : '' }}>Comunitario</option>
                        <option value="no_comunitario" {{ old('tipo_lug_part') == 'no_comunitario' ? 'selected' : '' }}>No comunitario</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="coordinador" class="col-sm-2 col-form-label">Coordinador</label>
                <div class="col-sm-5">
                    <select name="coordinador" id="coordinador" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        @foreach ($coordinadores as $coord)
                            @php
                                $persona = $coord->persona;
                                $nombreCompleto = $persona->nombre . ' ' . $persona->ape_pat . ' ' . $persona->ape_mat;
                            @endphp
                            <option value="{{ $coord->idcoordinador }}" {{ old('coordinador') == $coord->idcoordinador ? 'selected' : '' }}>{{ $nombreCompleto }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="mb-3 row">
                <label for="aprobacionDG" class="col-sm-2 col-form-label">AprobacionDG</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="aprobacionDG" id="aprobacionDG" value="{{ old('aprobacionDG') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="area" class="col-sm-2 col-form-label">Área</label>
                <div class="col-sm-5">
                    <select name="area" id="area" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->idarea }}" {{ old('area') == $area->idarea ? 'selected' : '' }}>{{ $area->nombre_area }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="denominacion" class="col-sm-2 col-form-label">Denominación</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="denominacion" id="denominacion" value="{{ old('denominacion') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="justificacion" class="col-sm-2 col-form-label">Justificación</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="justificacion" id="justificacion" rows="3" required>{{ old('justificacion') }}</textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="objetivos" class="col-sm-2 col-form-label">Objetivos</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="objetivos" id="objetivos" rows="3" required>{{ old('objetivos') }}</textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="actividades" class="col-sm-2 col-form-label">Actividades</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="actividades" id="actividades" rows="3" required>{{ old('actividades') }}</textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alcances" class="col-sm-2 col-form-label">Alcances</label>
                <div class="col-sm-5">
                    <textarea class="form-control" name="alcances" id="alcances" rows="3" required>{{ old('alcances') }}</textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="evaluacion" class="col-sm-2 col-form-label">Evaluación</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="evaluacion" id="evaluacion" value="{{ old('evaluacion') }}" maxlength="100" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="convenio_pdf" class="col-sm-2 col-form-label">Convenio PDF</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" name="convenio_pdf" id="convenio_pdf" accept=".pdf" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="tipo_duracion" class="col-sm-2 col-form-label">Tipo de duración</label>
                <div class="col-sm-5">
                    <select name="tipo_duracion" id="tipo_duracion" class="form-select" required>
                        <option value="" selected>Seleccione una opción</option>
                        <option value="continuo" {{ old('tipo_duracion') == 'continuo' ? 'selected' : '' }}>Continuo</option>
                        <option value="discontinuo" {{ old('tipo_duracion') == 'discontinuo' ? 'selected' : '' }}>Discontinuo</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="id_lugar_prestacion" class="col-sm-2 col-form-label">Lugar de prestacion</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" name="id_lugar_prestacion" id="id_lugar_prestacion" value="{{ old('id_lugar_prestacion') }}" required>
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

            <div class="mb-3 row">
                <div class="col-sm-2"></div>
                <div class="col-sm-5">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{url('menu')}}" class="btn btn-success">Cancelar</a>
                </div>
            </div>



        </form>
    </div>
</main>

