<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';
    protected $fillable = ['descripcion','titulo','cantidad_asistentes','convenio_id'];


    public function aprendizajeServicio(){
        return $this->hasMany(ActividadAprendizajeServicio::class);

    }

    public function extensiones(){
        return $this->hasMany(ActividadExtension::class);

    }

    public function titulaciones(){
        return $this->hasMany(ActividadTitulacion::class);

    }

    public function evidencias(){
        return $this->hasMany(Evidencia::class);

    }

    public function convenio(){
        return $this->belongsTo(Convenio::class);

    }
}
