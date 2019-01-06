<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ActividadTitulacionAcademico extends Pivot
{
    protected $table = 'actividad_titulacion_academicos';
    public $incrementing  = false;
    protected $primaryKey = null;

}
