<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Titulado extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'rut';
    protected $table = 'titulados';
    protected $attributes = ['borrado' => false];


    protected $fillable = [
        'rut','nombre','telefono','correo','empresa','anio','carrera'
    ];
    public function borrar(){
        $this->borrado = true;
        return $this->save();
    }

    public static function buscar($id){
        return Titulado::findOrFail($id)->where('borrado','=','0')->get();
    }

    public static function todos(){
        return Titulado::all()->where('borrado','=','0');
    }

    public function recuperar(){
        $this->borrado = false;
        return $this->save();
    }
}
