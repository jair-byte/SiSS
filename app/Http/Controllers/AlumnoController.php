<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RegAlumno;
use App\Mail\AlumnoRegisteredMail;
use Illuminate\Support\Facades\Mail;

class AlumnoController extends Controller
{
    public function create()
    {
        return view('alta_alumno');
    }

    public function store(Request $request)
    {
        $request->validate([
            'curp' => 'required|regex:/^[a-zA-Z0-9]*$/|size:18',

            'pass' => 'required|string|max:20',
            'correo' => 'required|email|max:100',
            
            // Agrega aquí las reglas de validación para los demás campos del formulario
        ]);
    
        $alumno = new RegAlumno();
        $alumno->curp = $request->curp;
        $alumno->pass = $request->pass;
        $alumno->correo = $request->correo;
        // Asegúrate de asignar los demás campos del formulario al modelo $alumno
    
        if ($alumno->save()) {
            // Enviar el correo electrónico al alumno con los datos del modelo
            Mail::to($alumno->correo)->send(new AlumnoRegisteredMail($alumno)); // Cambia el nombre de la clase si es necesario
    
            return redirect()->route('alumno.create')->with('success', '¡Alumno registrado correctamente!');
        } else {
            return redirect()->route('alumno.create')->with('error', 'Error al registrar al alumno.');
        }
    }
}    

