<?php

namespace App\Models;

use App\Models\ActividadExtension;
use Illuminate\Database\Eloquent\Model;

class TipoActividad extends Model
{
    protected $table = 'tipo_actividades';
    protected $fillable = ['nombre'];
    public $timestamps =false;
    public function actividadExtensiones(){
        return $this->hasMany(ActividadExtension::class,
            'tipo_actividades_id');
    }
}

