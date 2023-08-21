<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';
    protected $primaryKey = 'idcarrera';
    public $timestamps = false;

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'carrera_id', 'idcarrera');
    }

}
