<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudad';
    protected $primaryKey = 'idciudad';
    public $timestamps = false;

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio', 'idmunicipio');
    }
}
