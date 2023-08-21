<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantel extends Model
{
    protected $table = 'plantel';
    protected $primaryKey = 'idplantel';
    public $timestamps = false;

    public function responsable()
    {
        return $this->belongsTo(Persona::class, 'id_persona', 'idpersona');
    }

    // Relación uno a uno con el modelo Contacto
    public function contacto()
    {
        return $this->belongsTo(Contacto::class, 'id_contacto', 'idcontacto');
    }
}
