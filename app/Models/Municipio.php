<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    protected $primaryKey = 'idmunicipio';
    public $timestamps = false;

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'idestado');
    }
}
