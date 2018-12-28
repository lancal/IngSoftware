<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $table = 'organizations';
    protected $fillable = ['nombre', 'responsable', 'rut', 'tipEmpresa'];


}
