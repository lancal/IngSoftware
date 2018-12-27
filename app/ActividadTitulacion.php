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
}
