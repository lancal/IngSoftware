<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenios';

    protected $fillable = ['nombre','fecha_inicio','duracion','organizacion_rut','tipo_convenio_id'];



    public function tipoConvenio()
    {
       return $this->belongsTo(TipoConvenio::class,
           'id');

    }

    public function organizacion(){
        return $this->belongsTo(Organizacion::class,
            'rut');

    }

    public function evidencia(){
        return $this->hasOne(Evidencia::class,
            'convenio_id');

    }


}