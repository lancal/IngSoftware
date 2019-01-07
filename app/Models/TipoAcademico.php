<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoAcademico extends Model
{
    protected $table = 'tipo_academicos';
    protected $fillable = ['nombre'];

    public function academicos(){
        return $this->hasMany(Academico::class);
    }
}
