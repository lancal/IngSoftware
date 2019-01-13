<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';
    protected $fillable = ['convenio_id','descripcion','titulo','cantidad_asistentes'];
    protected $attributes = ['borrado' => false];


    public function aprendizajeServicio(){

        return $this->hasMany(ActividadAprendizajeServicio::class,
            'actividad_id');

    }

    public function extensiones(){
        return $this->hasMany(ActividadExtension::class,
            'actividad_id');

    }

    public function titulaciones(){
        return $this->hasMany(ActividadTitulacion::class,
            'actividad_id');

    }

    public function evidencias(){
        return $this->hasMany(Evidencia::class,
            'actividad_id');

    }

    public function convenio(){
        return $this->belongsTo(Convenio::class,
            'convenio_id');

    }


    public function borrar(){
        $this->borrado = true;
        return $this->save();
    }

    public static function buscar($id){
        return Actividad::findOrFail($id)->where('borrado','=','0')->get();
    }

    public static function todos(){
        return Actividad::all()->where('borrado','=','0');
    }

    public function recuperar(){
        $this->borrado = false;
        return $this->save();
    }
}
