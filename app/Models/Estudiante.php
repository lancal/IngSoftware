<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    public $incrementing = false;
    protected $primaryKey = 'rut';
    protected $fillable = ['rut','nombre','carrera','actividad_titulaciones_actividad_id'];

    protected $hidden = ['actividad_titulaciones_actividad_id'];

    public function actividadTitulaciones(){
        return $this->belongsTo(ActividadTitulacion::class,
            'act_titul_actividad_id');

    }
}
