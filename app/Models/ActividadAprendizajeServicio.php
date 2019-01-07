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
        return $this->belongsTo(Actividad::class);

    }

    public function academico(){
        return $this->belongsTo(Academico::class);

    }
}
