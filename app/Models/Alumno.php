<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumno';
    protected $primaryKey = 'idalumno';
    public $timestamps = false;

       // Relación uno a uno con el modelo Persona
       public function persona()
       {
           return $this->belongsTo(Persona::class, 'id_persona', 'idpersona');
       }
   
       // Relación uno a uno con el modelo Contacto
       public function contacto()
       {
           return $this->belongsTo(Contacto::class, 'id_contacto', 'idcontacto');
       }
   
       // Relación uno a uno con el modelo Direccion
       public function direccion()
       {
           return $this->belongsTo(Direccion::class, 'id_direccion', 'iddireccion');
       }
}
