<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    public $timestamps = false;
    protected $table='coordinador';
    protected $primaryKey = 'idcoordinador';

    public function persona(){
        return $this->belongsTo(Persona::class,'id_persona','idpersona');
    }

    public function contacto(){
        return $this->belongsTo(Contacto::class,'id_contacto','idcontacto');
    }
    use HasFactory;
}
