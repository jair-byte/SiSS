<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioSocial extends Model
{
    protected $table = 'servicio_social';
    protected $primaryKey = 'idservicio_social';
    public $timestamps = false;

    // Relación con el modelo Alumno
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'id_alumno', 'idalumno');
    }

    // Relación con el modelo DepartamentoLugarPrestacion (rel_lug_pres_depto)
    public function departamentoLugarPrestacion()
    {
        return $this->belongsTo(DepartamentoLugarPrestacion::class, 'id_depto_lp', 'idrel_lug_pres_depto');
    }

    // Relación con el modelo ProyectoOfertado
    public function proyectoOfertado()
    {
        return $this->belongsTo(ProyectoOfertado::class, 'id_proyecto', 'idproyecto');
    }

    // Relación con el modelo Informe (primer_informe)
    public function primerInforme()
    {
        return $this->belongsTo(Informe::class, 'primer_informe', 'idinforme');
    }

    // Relación con el modelo Informe (segundo_informe)
    public function segundoInforme()
    {
        return $this->belongsTo(Informe::class, 'segundo_informe', 'idinforme');
    }

    // Relación con el modelo Informe (tercer_informe)
    public function tercerInforme()
    {
        return $this->belongsTo(Informe::class, 'tercer_informe', 'idinforme');
    }

    // Relación con el modelo InformeGlobal (informe_global)
    public function informeGlobal()
    {
        return $this->belongsTo(InformeGlobal::class, 'informe_global', 'idinforme_global');
    }

    // Relación con el modelo CartaTermino
    public function cartaTermino()
    {
        return $this->belongsTo(CartaTermino::class, 'carta_termino', 'idcarta_termino');
    }
}
