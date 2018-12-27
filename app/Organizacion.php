<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{

    public function convenios()
    {
        return $this->hasMany(Convenio::class, 'organizacion_id');
    }

    //
}
