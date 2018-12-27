<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    //
    public function expositores()
    {
        return $this->hasMany(Expositor::class, 'actividadExtension_id');
    }

    public function academicos(){
        return $this->belongsToMany(Academico::class,'academico_actividad_extension','actividadExtension_id','academico_id');
    }
}
