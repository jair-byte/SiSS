<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\Ciudad;
use App\Models\Colonia;
use App\Models\Plantel;
use App\Models\Carrera;
use App\Models\Contacto;
use App\Models\Pais;
use App\Models\Direccion;
use App\Models\Persona;
use App\Models\ServicioSocial;
use App\Models\RelAlumnoCarrera;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::all();
        $municipios = Municipio::all();
        $ciudades = Ciudad::all();
        $colonias = Colonia::all();
        $planteles = Plantel::all();
        $carreras = Carrera::all();
        
        return view('vista', compact('estados', 'municipios', 'ciudades', 'colonias', 'planteles', 'carreras'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valiad los datos del formulario antes de guardarlos
        $request->validate([
            'nombre' => 'required|string|max:80',
            'apellido_paterno' => 'required|string|max:50',
            'apellido_materno' => 'required|string|max:50',
            'sexo' => 'required|in:masculino,femenino',
            'fecha_de_nacimiento' => 'required|date',
            'estado_civil' => 'required|in:SOLTERO,CASADO,DIVORCIADO,SEPARACION EN PROCESO JUDICIAL,VIUDO,CONCUBINATO',
            'nivel_estudios' => 'required|in:BACHILLERATO O EQUIVALENTE,TSU O EQUIVALENTE,LICENCIATURA',
            'creditos' => 'required|integer',
            'plantel' => 'required',
            'carrera' => 'required',
            'modalidad' => 'required',
            'promedio' => 'required|numeric|min:0|max:100',
            'correo' => 'required|email',
            'telefono_celular' => 'required|string',
            'telefono_fijo' => 'required|string',
            'telefono' => 'nullable|string',
            'codigo_postal' => 'required|string',
            'calle' => 'required|string',
            'num_exterior' => 'required|string',
            'num_interior' => 'nullable|string',
            'referencias' => 'nullable|string',
        ]);

        $contacto = new Contacto();
        $contacto->telefono_fijo = $request->input('telefono_fijo');
        $contacto->celular = $request->input('telefono_celular');
        $contacto->telefono_ref = $request->input('telefono');
        $contacto->correo = $request->input('correo');
        $contacto->save();

        // Crear y guardar el registro de la dirección en la tabla direccion
        $direccion = new Direccion();
        $direccion->calle = $request->input('calle');
        $direccion->no_ext = $request->input('num_exterior');
        $direccion->no_int = $request->input('num_interior');
        
        $direccion->id_colonia = $request->input('colonia'); // Asignar el ID de la colonia
        $direccion->referencia = $request->input('referencias');
        $direccion->save();
    
        
        $persona = new Persona();
        $persona->titulo = 'C'; // Aquí puedes asignar el título correspondiente
        $persona->nombre = $request->input('nombre');
        $persona->ape_pat = $request->input('apellido_paterno');
        $persona->ape_mat = $request->input('apellido_materno');
        $persona->save();

        $personaId = $persona->idpersona;
        
        // Crear y guardar el registro del alumno en la tabla alumno
        $sexoInput = $request->input('sexo');
        // Transformar el valor del sexo del formulario al valor permitido en la base de datos
        $sexo = ($sexoInput === 'masculino') ? 'H' : 'M';
        $alumno = new Alumno();
        $alumno->id_persona = $personaId; // Asignar el ID de la persona
        $alumno->curp = 'VEM030521MMCABC07';// este un valor estatico, cambiarlo para hacerlo dinamico una ves que se tenga el reg_alumno
        $alumno->nom_usu_red = '1';//valor estaico cambiar el valor
        $alumno->id_contacto = $contacto->idcontacto;
        $alumno->id_direccion = $direccion->id_direccion;
        $alumno->sexo = $sexo; // Usar el valor transformado
        $alumno->fecha_nac = $request->input('fecha_de_nacimiento');
        $alumno->edo_civil = $request->input('estado_civil');
        $alumno->nivel_estudios = $request->input('nivel_estudios');
        $alumno->creditos = $request->input('creditos');
        $alumno->promedio = $request->input('promedio');
        $alumno->nom_usu_red = $request->input('nombre_red');
        $alumno->tipo_red = $request->input('tipo_red');
        $alumno->save();

        $alumnoId = $alumno->idalumno;
    

        $carreraId = $request->input('carrera');
        $relAlumnoCarrera = new RelAlumnoCarrera();
        $relAlumnoCarrera->id_alumno= $alumnoId;
        $relAlumnoCarrera->id_carrera=$carreraId;
        $relAlumnoCarrera->mod_est = $request->input('modalidad');
        $relAlumnoCarrera->grado = $request->input('grado');
        $relAlumnoCarrera->save();

        
        
    

       
    
    
      




        return redirect()->route('menu.index');
        
        
       
    }

}
