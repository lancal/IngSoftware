<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';
    protected $primaryKey = 'rut';
    public $incrementing = false;

    protected $fillable = ['rut','nombre','tipo_academico'];

    public function tipoAcademico(){
        return $this->belongsTo(TipoAcademico::class);
    }

    public function actividadTitulacion(){
        return $this->belongsToMany(ActividadTitulacion::class,
            'actividad_titulacion_academicos',
            'academico_rut',
            'act_titul_actividad_id');


    }
}