<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    public $incrementing = false;
    protected $primaryKey = 'rut';
    protected $fillable = ['rut','nombre','carrera'];

    public function actividadTitulaciones(){
        return $this->belongsTo(ActividadTitulacion::class);
    }
}
