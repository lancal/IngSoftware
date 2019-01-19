<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicoActividadAprendizajeServicio extends Model
{
    protected $table = 'act_apren_serv_academicos';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = ['academico_rut','act_apren_serv_aca_id'];
}
