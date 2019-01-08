<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';
    protected $fillable = ['convenio_id','descripcion','titulo','cantidad_asistentes'];


    public function aprendizajeServicio(){

        return $this->hasMany(ActividadAprendizajeServicio::class,
            'actividad_id');

    }

    public function extensiones(){
        return $this->hasMany(ActividadExtension::class,
            'actividad_id');

    }

    public function titulaciones(){
        return $this->hasMany(ActividadTitulacion::class,
            'actividad_id');

    }

    public function evidencias(){
        return $this->hasMany(Evidencia::class,
            'actividad_id');

    }

    public function convenio(){
        return $this->belongsTo(Convenio::class,
            'convenio_id');

    }
}
