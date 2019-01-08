<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoConvenio extends Model
{
    protected $table = 'tipo_convenios';
    protected $fillable = ['nombre'];

    public function convenios(){
       return $this->hasMany(Convenio::class,
           'tipo_convenios_id');

    }
}
