<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expositor extends Model
{
    protected $table = 'expositores';

    public function actividadExtensiones(){
        return $this->belongsToMany(ActividadExtension::class,
            'actividad_extensones_expositores',
            'expositor_id',
            'act_ext_actividad_id');
    }
}
