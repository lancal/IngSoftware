<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizaciones';
    protected $primaryKey = 'rut';
    public $incrementing = false;
    protected $attributes = ['borrado' => false];


    protected $fillable = ['rut','nombre','responsable'];

    public function convenios(){
        return $this->hasMany(Convenio::class,
            'organizacion_rut');

    }
    public function borrar(){
        $this->borrado = true;
        return $this->save();
    }

    public static function buscar($id){
        return Indicador::findOrFail($id)->where('borrado','=','0')->get();
    }

    public static function todos(){
        return Indicador::all()->where('borrado','=','0');
    }

    public function recuperar(){
        $this->borrado = false;
        return $this->save();
    }
}
