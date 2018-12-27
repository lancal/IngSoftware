<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\Role_user;
use App\User;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role_User::truncate();

        $rol_administrador = Role::where('name', 'Administrador')->first();

        /**
         *
         * Crea un administrador
         *
         */
        $usuario = new User();
        $usuario->name = 'Usuario Admin';
        $usuario->email = 'admin@ucn.cl';
        $usuario->email_verified_at = 'admin@ucn.cl';
        $usuario->password = bcrypt('Admin2018$%');
        $usuario->save();
        $usuario->roles()->attach($rol_administrador);


    }
}
