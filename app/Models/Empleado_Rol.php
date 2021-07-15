<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado_Rol extends Model
{
    protected $table='empleado_rol';
    public $timestamps=false;

    protected $fillable = [
        'Empleado_id',
        'Rol_id',
];
}
