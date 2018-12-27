<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadAprendizajeServicio extends Model
{
    //
    public function academicos(){
        return $this->belongsToMany(Academico::class,'academico_actividad_extension','actividadAmasS_id','academico_id');
    }
}
