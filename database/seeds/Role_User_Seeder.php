<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
use App\Role_user;

class Role_User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role_user::truncate();

        Role_user::create([
            'Role_id'	=> 1,
            'User_id'	=> 1
        ]);

        Role_user::create([
            'Role_id'	=> 1,
            'User_id'	=> 2
        ]);

        Role_user::create([
            'Role_id'	=> 1,
            'User_id'	=> 3
        ]);


    }
}
