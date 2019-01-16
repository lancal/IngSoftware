<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenios';

    protected $fillable = ['nombre','fecha_inicio','duracion','organizacion_rut','tipo_convenio_id'];

    protected $attributes = ['borrado' => false];



    public function tipoConvenio()
    {
       return $this->belongsTo(TipoConvenio::class,
           'tipo_convenio_id');

    }

    public function organizacion(){
        return $this->belongsTo(Organizacion::class,
            'rut');

    }

    public function evidencia(){
        return $this->hasOne(Evidencia::class,
            'convenio_id');

    }


    public function borrar(){
        $this->borrado = true;
        return $this->save();
    }

    public static function buscar($id){
        return Convenio::findOrFail($id)->where('borrado','=','0')->get();
    }

    public static function todos(){
        return Convenio::all()->where('borrado','=','0');
    }

    public function recuperar(){
        $this->borrado = false;
        return $this->save();
    }
}