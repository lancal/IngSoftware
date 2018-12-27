<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{

    //public $timestamps = false;
    protected $table = 'Role_user';
    protected $fillable = ['Role_id','User_id'];


}