<?php
use Illuminate\Database\Seeder;

//use Illuminate\Database\Eloquent;

class DatabaseSeeder extends Seeder
{



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([

            Role_Seeder::class,
            Role_User_Seeder::class,
            User_Seeder::class,

            Actividad_Seeder::class,

            Actividad_Extension_Seeder::class,

            Actividad_Aprendizaje_Servicios_Seeder::class,

            Academico_Actividad_Extensiones_Seeder::class,

            Academico_Seeder::class,

            Tipo_Academico_Seeder::class,









        ]);


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}