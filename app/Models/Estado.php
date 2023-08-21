<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';
    protected $primaryKey = 'idestado';
    public $timestamps = false; // Si no necesitas timestamps en la tabla
    
    //relacion con la tabla "pais"
    public function pais(){
        return $this->belongsTo(Pias::class, 'id_pais','idpais');
    }


}