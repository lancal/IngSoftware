<?php

use Illuminate\Database\Seeder;

use App\Models\Actividad;

class Actividad_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividad::truncate();

        Actividad::create([
            'descripcion'	=> 'Es una actividad',
            'titulo'	=> 'Es un titulo',
            'cantidad_asistentes' => 10
        ]);

        Actividad::create([
            'descripcion'	=> 'Es una actividad II',
            'titulo'	=> 'Es un titulo II',
            'cantidad_asistentes' => 20
        ]);
    }
}