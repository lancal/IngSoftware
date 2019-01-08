<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    protected $table = 'actividad_extensiones';
    public $incrementing = true;
    protected $primaryKey = 'actividad_id';
    protected $fillable = ['lugar','fecha_realizacion','actividad_id'];

    public function actividad(){
        return $this->belongsTo(Actividad::class,
            'actividad_id');
    }

    public function academico(){
        return $this->belongsToMany(Academico::class,
            'academico_actividad_extensiones',
            'academico_rut',
            'act_ext_actividad_id'
            );
    }

    public function expositores(){
        return $this->belongsToMany(Expositor::class,
            'actividad_extensiones_expositores',
            'expositor_id',
            'act_ext_actividad_id'
            );
    }
}
