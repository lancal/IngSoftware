<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';
    protected $primaryKey = 'rut';
    public $incrementing = false;

    protected $fillable = ['rut','nombre','tipo_academico_id'];

    public function tipoAcademico(){
        return $this->belongsTo(TipoAcademico::class,
            'id');

    }

    public function actividadTitulacion(){
        return $this->belongsToMany(ActividadTitulacion::class,
            'actividad_titulacion_academicos',
            'academico_rut',
            'act_titul_actividad_id');



    }

    public function actividadExtensiones(){
        return $this-> belongsToMany(ActividadExtension::class,
            'academico_actividad_extension',
            'academico_rut',
            'act_ext_actividad_id');

    }

    public function actividadAprendizajeServicios(){
        return $this->hasMany(ActividadAprendizajeServicio::class,
            'academico_rut');

    }
}