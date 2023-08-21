<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direccion';
    protected $primaryKey = 'id_direccion';
    public $timestamps = false;

    // Relación muchos a uno con la tabla Colonia
    public function colonia()
    {
        return $this->belongsTo(Colonia::class, 'id_colonia', 'idcolonia');
    }
}
