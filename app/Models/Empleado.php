<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
        'id',
        'nombre',
        'sexo',
        'email',
        'area_id',
        'boletin',
        'descripcion',
];

    
}
