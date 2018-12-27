<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    public function evidencias()
    {
        return $this->hasMany(Evidencia::class, 'actividad_id');
    }

    public function actividadesTitulacion()
    {
        return $this->hasMany(ActividadTitulacion::class, 'actividad_id');
    }

    public function convenio()
    {
        return $this->belongsTo(Convenio::class);
    }

    public function actividadesExtension()
    {
        return $this->hasMany(ActividadExtension::class, 'actividad_id');
    }

    public function actividadesAmasS()
    {
        return $this->hasMany(ActividadAprendizajeServicio::class, 'actividad_id');
    }
}
