<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table='areas';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
        'id',
        'nombre',
];
}
