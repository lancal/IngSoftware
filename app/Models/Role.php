<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    //public $timestamps = false;
    protected $table = 'Role';
    protected $fillable = ['name','description'];


    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'Role_User',
            'User_id',
            'Role_id');

    }

}
