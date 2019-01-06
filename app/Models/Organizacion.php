<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    protected $table = 'organizaciones';
    protected $primaryKey = 'rut';
    public $incrementing = false;

    protected $fillable = ['rut','nombre','responsable'];
}