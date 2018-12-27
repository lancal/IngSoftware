<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            Role_Seeder::class,
            Role_User_Seeder::class,
            User_Seeder::class,


        ]);
    }
}