<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicoActividadExtension extends Model
{
    protected $table = 'academico_actividad_extensiones';
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = ['academico_rut','act_ext_actividad_id'];

}
