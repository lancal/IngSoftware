<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoConvenio extends Model
{
    public function convenios()
    {
        return $this->hasMany(Convenio::class, 'tipoConvenio_id');
    }

}
