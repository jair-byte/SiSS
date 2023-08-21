<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'idpais';
    public $timestamps = false;

    // Relación uno a muchos con la tabla Estado
    public function estados()
    {
        return $this->hasMany(Estado::class, 'id_pais', 'idpais');
    }
}
