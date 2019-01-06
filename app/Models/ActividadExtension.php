<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActividadExtension extends Model
{
    protected $table = 'actividad_extensiones';
    public $incrementing = true;
    protected $primaryKey = 'actividad_id';
    protected $fillable = ['lugar','fecha_realizacion'];

    public function actividad(){
        return $this->belongsTo(Actividad::class);
    }
}
