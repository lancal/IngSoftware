<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expositor extends Model
{
    protected $table = 'expositores';

    protected $fillable = ['nombre'];
    protected $attributes = ['borrado' => false];


    public function actividadExtensiones(){
        return $this->belongsToMany(ActividadExtension::class,
            'actividad_extensiones_expositores',
            'expositor_id',
            'act_ext_actividad_id');
    }


    public function borrar(){
        $this->borrado = true;
        return $this->save();
    }

    public static function buscar($id){
        return Expositor::findOrFail($id)->where('borrado','=','0')->get();
    }

    public static function todos(){
        return Expositor::all()->where('borrado','=','0');
    }

    public function recuperar(){
        $this->borrado = false;
        return $this->save();
    }
}
