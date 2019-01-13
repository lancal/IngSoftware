<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academico extends Model
{
    protected $table = 'academicos';
    protected $primaryKey = 'rut';
    public $incrementing = false;
    protected $attributes = ['borrado' => false];

    protected $fillable = ['rut','nombre','tipo_academico_id'];

    public function tipoAcademico(){
        return $this->belongsTo(TipoAcademico::class,
            'id');

    }

    public function actividadTitulacion(){
        return $this->belongsToMany(ActividadTitulacion::class,
            'actividad_titulacion_academicos',
            'act_titul_actividad_id',
            'academico_rut');




    }

    public function actividadExtensiones(){
        return $this-> belongsToMany(ActividadExtension::class,
            'academico_actividad_extension',
            'academico_rut',
            'act_ext_actividad_id');

    }

    public function actividadAprendizajeServicios(){
        return $this->hasMany(ActividadAprendizajeServicio::class,
            'actividad_id',
            'academico_rut');

    }

    public function borrar(){
        $this->borrado = true;
        return $this->save();
    }

    public static function buscar($id){
        return Academico::findOrFail($id)->where('borrado','=','0')->get();
    }

    public static function todos(){
        return Academico::all()->where('borrado','=','0')->get();
    }

    public function recuperar(){
        $this->borrado = false;
        return $this->save();
    }
}