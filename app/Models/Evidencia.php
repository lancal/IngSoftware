<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Evidencia extends Model
{
    protected $table = 'evidencias';

    protected $fillable = ['ruta','tipo'];


    public function convenio(){

        return $this->belongsTo(Convenio::class,
            'convenio_id');

    }

    public function actividades(){
        return $this->belongsToMany(Actividad::class,
            'actividad_id');


    }


}
