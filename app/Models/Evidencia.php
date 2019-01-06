<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evidencia extends Model
{
    protected $table = 'evidencias';
    public $incrementing = false;
    protected $primaryKey = null;


    public function convenio(){
        return $this->belongsTo(Convenio::class);
    }

    public function actividades(){
        return $this->belongsToMany(Actividad::class);
    }
}
