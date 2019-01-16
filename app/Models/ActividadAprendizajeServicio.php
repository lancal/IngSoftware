<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadAprendizajeServicio extends Model
{
    protected $table = 'actividad_aprendizaje_servicios';
    protected $primaryKey = null;
    public $incrementing = false;
    protected $fillable = ['asignatura','cantidad_estudiantes','anio','semestre','actividad_id','academico_rut'];

    public function actividad(){
        return $this->belongsTo(Actividad::class,
            'actividad_id');

    }

    public function academicos(){
        return $this->belongsToMany(Academico::class,
            'act_apren_serv_academicos',
            'academico_rut',
            'act_apren_serv_aca_id');

    }
}
