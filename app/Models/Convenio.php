<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenios';

    protected $fillable = ['nombre','fecha_inicio','duracion'];



    public function tipoConvenio()
    {
       return $this->belongsTo(TipoConvenio::class);
    }

    public function organizacion(){
        return $this->belongsTo(Organizacion::class);
    }

    public function evidencia(){
        return $this->hasOne(Evidencia::class);
    }
}