<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    protected $table = 'colonia';
    protected $primaryKey = 'idciudad';
    public $timestamps = false;

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad', 'idciudad');
    }
}
