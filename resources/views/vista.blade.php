<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="">Alta de Alumno</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    
</head>
<body>
    <script>
        function toggleOtraColonia() {
            var coloniaSelect = document.getElementById("colonia");
            var otraColoniaDiv = document.getElementById("otra_colonia_div");
    
            if (coloniaSelect.value === "otra") {
                otraColoniaDiv.style.display = "block";
            } else {
                otraColoniaDiv.style.display = "none";
            }
        }

        function toggleOtraCiudad() {
        var ciudadSelect = document.getElementById("ciudad");
        var otraCiudadDiv = document.getElementById("otra_ciudad_div");

        if (ciudadSelect.value === "otra") {
            otraCiudadDiv.style.display = "block";
        } else {
            otraCiudadDiv.style.display = "none";
        }
    }

      function toggleOtroMunicipio() {
        var municipioSelect = document.getElementById("municipio");
        var otroMunicipioDiv = document.getElementById("otro_municipio_div");

        if (municipioSelect.value === "otro") {
            otroMunicipioDiv.style.display = "block";
        } else {
            otroMunicipioDiv.style.display = "none";
        }
    }
    </script>
    <div class="container">
        <h1 class="mt-4" style="text-align: center;">Alta de Alumno</h1>
        <form action="{{ url('vista') }}" method="post">
            @csrf
            <h2 class="mt-4">Datos personales</h2>

            @if ($errors->any())
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                        
                    @endforeach
                </ul>

            </div>
                
            @endif

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old ('nombre') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido paterno:</label>
                        <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="{{ old ('apellido_paterno') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="apellido_materno">Apellido materno:</label>
                        <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="{{ old ('apellido_materno') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control" name="sexo" id="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="femenino">Femenino</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
                    <input type="date" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento" value="{{ old ('fecha_de_nacimiento') }}" required>
                </div>
                <div class="col-md-3">
                    <div class="form-group">Estado Civil:
                        <label for="estado_civil">:</label>
                        <select class="form-control" name="estado_civil" id="estado_civil">
                            <option value="SOLTERO">Soltero</option>
                            <option value="CASADO">Casado</option>
                            <option value="DIVORCIADO">Divorciado</option>
                            <option value="SEPARADO_EN_PROCESO_JUDICIAL">Separado en proceso judicial</option>
                            <option value="VIUDO">Viudo</option>
                            <option value="CONCUBINATO">Concubinato</option>   
                        </select>
                    </div>
                </div>
            </div>
            <h2 class="mt-4">Información Académica</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="inicio_servicio_social">Inicio de Servicio Social:</label>
                        <input type="date" class="form-control" name="inicio_servicio_social" id="inicio_servicio_social" value="{{ old ('inicio_servicio_social') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nivel_estudios">Nivel de estudios:</label>
                        <select class="form-control" name="nivel_estudios" id="nivel_estudios">
                            <option value="BACHILLERATO O EQUIVALENTE">BACHILLERATO O EQUIVALENTE</option>
                            <option value="TSU O EQUIVALENTE">TSU O EQUIVALENTE</option>
                            <option value="LICENCIATURA">LICENCIATURA</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="creditos">Créditos:</label>
                        <input type="number" class="form-control" name="creditos" id="creditos" value="{{ old ('creditos') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="promedio">Promedio:</label>
                        <input type="number" class="form-control" name="promedio" id="promedio" step="0.01" value="{{ old ('promedio') }}" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="plantel">Plantel:</label>
                        <select name="plantel" id="plantel" class="form-control">
                            <option value="">Selecciona un plantel</option>
                            @foreach($planteles as $plantel)
                            <option value="{{ $plantel->idplantel }}">{{ $plantel->nombre_plantel }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="carrera">Carrera:</label>
                        <select name="carrera" id="carrera" class="form-control">
                            <option value="">Selecciona una carrera</option>
                            @foreach($carreras as $carrera)
                            <option value="{{ $carrera->idcarrera }}">{{ $carrera->nombre_c }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="modalidad">Modalidad:</label>
                        <select class="form-control" name="modalidad" id="modalidad">
                            <option value="cuatrimestral">Cuatrimestral</option>
                            <option value="semestral">Semestral</option>
                            <option value="anual">Anual</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="grado">Grado:</label>
                        <input type="number" class="form-control" name="grado" id="grado" value="{{ old ('grado') }}" required>
                    </div>
                </div>
            </div>

            <h2 class="mt-4">Datos de Contacto</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="correo">Correo Electrónico:</label>
                        <input type="email" class="form-control" name="correo" id="correo" value="{{ old ('correo') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefono_celular">Teléfono Celular:</label>
                        <input type="text" class="form-control" name="telefono_celular" id="telefono_celular" value="{{ old ('telefono_celular') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefono_fijo">Teléfono Fijo (casa):</label>
                        <input type="text" class="form-control" name="telefono_fijo" id="telefono_fijo" value="{{ old ('telefono_fijo') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="telefono">Teléfono de referencia:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old ('telefono') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nombre_red">Nombre de Usuario en Red Social:</label>
                        <input type="text" class="form-control" name="nombre_red" id="nombre_red" value="{{ old ('nombre_red') }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tipo_red">Tipo de Red Social:</label>
                    <select class="form-control" name="tipo_red" id="tipo_red">
                        'FACEBOOK','TWITTER','WHATSAPP','INSTAGRAM','TIKTOK'
                        <option value="facebook">FACEBOOK</option>
                        <option value="twitter">TWITTER</option>
                        <option value="whatsapp">WHATSAPP</option>
                        <option value="instagram">INSTAGRAM</option>
                        <option value="tiktok">TIKTOK</option>
                    </select>
                </div>
            </div>

            <h2 class="mt-4">Dirección</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <select name="estado" id="estado" class="form-control">
                            <option value="">Selecciona un estado</option>
                            @foreach ($estados as $estado )
                            <option value="{{ $estado->idestado }}">{{ $estado->nombre_edo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="municipio">Municipio:</label>
                    <select name="municipio" id="municipio" class="form-control" onchange="toggleOtroMunicipio()">
                        <option value="">Selecciona un municipio</option>
                        @foreach ($municipios as $municipio)
                            <option value="{{ $municipio->idmunicipio }}">{{ $municipio->nombre_mun }}</option>
                        @endforeach
                        <option value="otro">Otro</option> <!-- Opción "Otro" para ingresar un nuevo municipio -->
                    </select>
                </div>
                
                
                <div class="col-md-3">
                    <label for="ciudad">Ciudad:</label>
                    <select name="ciudad" id="ciudad" class="form-control" onchange="toggleOtraCiudad()">
                        <option value="">Selecciona una ciudad</option>
                        @foreach ($ciudades as $ciudad)
                            <option value="{{ $ciudad->idciudad }}">{{ $ciudad->nombre_ciudad }}</option>
                        @endforeach
                        <option value="otra">Otra</option> <!-- Opción "Otra" para ingresar una nueva ciudad -->
                    </select>
                </div>
                
    
                
                <div class="col-md-3">
                    <label for="colonia">Colonia:</label>
                    <select name="colonia" id="colonia" class="form-control" onchange="toggleOtraColonia()">
                        <option value="">Selecciona una colonia</option>
                        @foreach($colonias as $colonia)
                            <option value="{{ $colonia->idcolonia }}">{{ $colonia->nombre_col }}</option>
                        @endforeach
                        <option value="otra">Otra</option> <!-- Opción "Otra" para ingresar una nueva colonia -->
                    </select>
                </div>
                
                

                <div class="col-md-3" id="otro_municipio_div" style="display: none;">
                    <label for="otro_municipio">Otro municipio:</label>
                    <input type="text" name="otro_municipio" id="otro_municipio" class="form-control">
                </div>

                <div class="col-md-3" id="otra_ciudad_div" style="display: none;">
                    <label for="otra_ciudad">Otra ciudad:</label>
                    <input type="text" name="otra_ciudad" id="otra_ciudad" class="form-control">
                </div>

                <div class="col-md-3" id="otra_colonia_div" style="display: none;">
                    <label for="otra_colonia">Otra colonia:</label>
                    <input type="text" name="otra_colonia" id="otra_colonia" class="form-control">
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="codigo_postal">C.P.:</label>
                        <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" value="{{ old ('codigo_postal') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="calle">Calle:</label>
                        <input type="text" class="form-control" name="calle" id="calle" value="{{ old ('calle') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="num_exterior">Num. Exterior:</label>
                        <input type="text" class="form-control" name="num_exterior" id="num_exterior" value="{{ old ('num_exterior') }}" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="num_interior">Num. Interior:</label>
                        <input type="text" class="form-control" name="num_interior" id="num_interior" value="{{ old ('num_interior') }}" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="referencias">Referencias:</label>
                <textarea class="form-control" name="referencias" id="referencias"></textarea>
            </div>

            <div class="form-group">
                <a href="{{ url("menu")  }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <footer style="background-color: #000; color: #fff; padding: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Contacto: 7224284789</p>
                    <p>Contáctenos</p>
                    <p>Gobierno del Estado de México</p>
                </div>
                <div class="col-md-4 text-center">
                    <p>Mapa de sitio</p>
                    <p>Calle Lerdo Poniente No. 300 Segundo piso, puerta 327</p>
                </div>
                <div class="col-md-4 text-right">
                    <img src="https://img2.freepng.es/20180920/glx/kisspng-mexico-state-logo-crest-brand-heraldry-aliados-fundacin-movimiento-es-salud-a-c-5ba327bacc0984.4491374715374191948358.jpg" alt="Logo" style="width: 155px;">
                </div>
            </div>
        </div>
    </footer>
</body>
</html>