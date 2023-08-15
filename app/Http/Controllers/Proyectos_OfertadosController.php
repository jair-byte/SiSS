<?php

namespace App\Http\Controllers;

use App\Models\Proyectos_ofertados;
use App\Models\Area;
use App\Models\Persona;
use App\Models\Coordinador;
use Illuminate\Http\Request;

class Proyectos_ofertadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {
        $proyectos_ofertados= Proyectos_ofertados::all();
        return view('proyectos_ofertados.index',['proyectos_ofertados'=>$proyectos_ofertados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $coordinadores = Coordinador::with('persona')->get();
        $areas = Area::all();
        return view('proyectos_ofertados.create', compact('coordinadores', 'areas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_proyecto' => 'required',
            'perfil' => 'required',
            'duracion' => 'required|numeric',
            'estimulo' => 'required',
            'tipo_lug_part' => 'required',
            'coordinador' => 'required',
            'aprobacionDG' => 'required|numeric',
            'area' => 'required',
            'denominacion' => 'required',
            'justificacion' => 'required',
            'objetivos' => 'required',
            'actividades' => 'required',
            'alcances' => 'required',
            'evaluacion' => 'required',
            'convenio_pdf' => 'required|file|mimes:pdf',
            'tipo_duracion' => 'required',
            'id_lugar_prestacion'=> 'required',
            'estatus'=> 'required'
        ]);

        // Guardar el archivo PDF en una ubicación específica
        $convenioPdf = $request->file('convenio_pdf');
        $pdfPath = $convenioPdf->store('pdfs', 'public');

        // Crear un nuevo proyecto ofertado
        $proyectos_ofertados = new Proyectos_ofertados();
        $proyectos_ofertados->tipo_proyecto = $request->input('tipo_proyecto');
        $proyectos_ofertados->perfil =$request->input('perfil');
        $proyectos_ofertados->duracion = $request->input('duracion');
        $proyectos_ofertados->estimulo = $request->input('estimulo');
        $proyectos_ofertados->tipo_lug_part = $request->input('tipo_lug_part'); // Corregido aquí
        $coordinadorId = $request->input('coordinador'); // Cambiado el nombre de la variable
        $coordinador = Coordinador::find($coordinadorId); // Obtener la instancia del modelo Coordinador
        $proyectos_ofertados->coordinadors()->associate($coordinador); // Asociar el coordinador al proyecto
        $proyectos_ofertados->aprobacionDG = $request->input('aprobacionDG');
        $proyectos_ofertados->area = $request->input('area');
        $proyectos_ofertados->denominacion = $request->input ('denominacion');
        $proyectos_ofertados->justificacion = $request->input ('justificacion');
        $proyectos_ofertados->objetivos = $request->input ('objetivos');
        $proyectos_ofertados->alcances = $request->input ('alcances');
        $proyectos_ofertados->actividades = $request->input ('actividades');
        $proyectos_ofertados->evaluacion = $request->input ('evaluacion');
        $proyectos_ofertados->convenioPDF = $pdfPath;
        $proyectos_ofertados->tipo_duracion = $request->input('tipo_duracion');
        $proyectos_ofertados->id_lugar_prestacion = $request->input ('id_lugar_prestacion');
        $proyectos_ofertados->estatus = $request->input ('estatus');
        $proyectos_ofertados->save();

        return view("proyectos_ofertados.message",['msg'=>"Proyecto Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Proyectos_ofertados $proyectos_ofertados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyectos_ofertados $proyectos_ofertados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyectos_ofertados $proyectos_ofertados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyectos_ofertados $proyectos_ofertados)
    {
        //
    }
}
