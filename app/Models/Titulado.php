<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Titulado extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'rut';
    protected $table = 'titulados';

    protected $fillable = [
        'rut','nombre','telefono','correo','empresa','anio','carrera'
    ];
}
