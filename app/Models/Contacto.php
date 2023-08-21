<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto'; // Nombre de la tabla en la base de datos
    protected $primaryKey = 'idcontacto'; // Clave primaria de la tabla
    public $timestamps = false;
}
