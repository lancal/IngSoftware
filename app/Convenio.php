<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    //
    public function evidencias()
    {
        return $this->hasMany(Evidencia::class, 'convenio_id');
    }

    public function actividad()
    {
        return $this->hasOne(Actividad::class, 'convenio_id');
    }
}
