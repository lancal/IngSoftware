<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    protected $table = 'expositores';
    protected $attributes = ['borrado' => false];


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
