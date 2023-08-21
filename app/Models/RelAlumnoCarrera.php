<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelAlumnoCarrera extends Model
{
    protected $table = 'rel_alumno_carrera';
    protected $primaryKey = 'idrel_alumno_carrera';
    public $timestamps = false;

    // Relación con el modelo Alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'id_alumno', 'idalumno');
    }

    // Relación con el modelo Carrera (PlantelCarrera)
    public function carrera()
    {
        return $this->belongsTo(PlantelCarrera::class, 'id_carrera', 'idplantel_carrera');
    }
}
