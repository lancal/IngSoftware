<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    //
    public function expositores()
    {
        return $this->hasMany(Expositor::class, 'actividadExtension_id');
    }
}
