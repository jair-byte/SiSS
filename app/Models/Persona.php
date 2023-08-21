<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'idpersona';
    public $timestamps = false;

    // Relación uno a uno con la tabla Alumno
    public function alumno()
    {
        return $this->hasOne(Alumno::class, 'persona_id', 'idpersona');
    }
}
