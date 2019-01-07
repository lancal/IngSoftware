<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    protected $table = 'actividad_extensiones';
    public $incrementing = true;
    protected $primaryKey = 'actividad_id';
    protected $fillable = ['lugar','fecha_realizacion'];

    public function actividad(){
        return $this->belongsTo(Actividad::class);
    }

    public function actividadExtensiones(){
        return $this->belongsToMany(Academico::class,
            'academico_actividad_extensiones',
            'act_ext_actividad_id',
            'academico_rut');
    }

    public function expositores(){
        return $this->belongsToMany(Expositor::class,
            'actividad_extensiones_expositores',
            'act_ext_actividad_id',
            'expositor_id');
    }
}
