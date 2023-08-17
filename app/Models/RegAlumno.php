<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegAlumno extends Model
{
    use HasFactory;

    protected $table = 'reg_alumno';
    protected $primaryKey = 'curp'; // Si el campo llave primaria es diferente a 'id', especificarlo aquí
    public $incrementing = false; // Indicar si la llave primaria es autoincremental (false para llave primaria no autoincremental)
    protected $keyType = 'string'; // Tipo de dato de la llave primaria
    public $timestamps = false; // Indicar si la tabla tiene timestamps (created_at y updated_at)

    // Aquí puedes definir los campos adicionales de la tabla reg_alumno
    protected $fillable = ['curp', 'pass', 'correo'];
}
