<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class ActividadTitulacion extends Model
    {
        protected $table = 'actividad_titulaciones';
        protected $primaryKey = 'actividad_id';
        public $incrementing = true;
        protected $fillable = ['fecha_inicio','fecha_termino','lugar'];

        public function actividad(){
            return $this->belongsTo(Actividad::class);

    }

    public function estudiantes(){
        return $this->hasMany(Estudiante::class,
            'actividad_titulaciones_actividad_id');

    }

    public function academicos(){
        return $this->belongsToMany(Academico::class,
            'actividad_titulacion_academicos',
            'act_titul_actividad_id',
            'academico_rut');

    }
}
