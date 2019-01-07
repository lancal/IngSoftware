<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ActividadTitulacionAcademico extends Pivot
{
    protected $table = 'actividad_titulacion_academicos';
    public $incrementing  = false;
    protected $primaryKey = null;

    protected $fillable = ['act_titul_actividad_id','academico_rut'];

}
