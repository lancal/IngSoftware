<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadTitulacion extends Model
{
    //
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'actividadTitulacion_id');
    }

    public function academicos(){
        return $this->belongsToMany(Academico::class,'academico_actividad_titulacion','actividadTitulacion_id','academico_id');
    }
}
