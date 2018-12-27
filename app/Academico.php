<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    //
    public function actividadesTitulacion(){
        return $this->belongsToMany(ActividadTitulacion::class,'academico_actividad_titulacion','academico_id','actividadTitulacion_id');
    }

    public function actividadesExtension(){
        return $this->belongsToMany(ActividadExtension::class,'academico_actividad_extension','academico_id','actividadExtension_id');
    }

    public function actividadesAmasS(){
        return $this->belongsToMany(ActividadAprendizajeServicio::class,'academico_actividad_aprendizaje_servicio','academico_id','actividadAmasS_id');
    }
}
