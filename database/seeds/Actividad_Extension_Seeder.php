<?php

use Illuminate\Database\Seeder;

use App\Models\ActividadExtension;
use App\Models\Actividad;

class Actividad_Extension_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Actividad::truncate();
        ActividadExtension::truncate();

        //$actividad = Actividad::where('descripcion', 'titulo','cantidad_asistentes')->first();

        ActividadExtension::create([
            'lugar'	=> 'UCN',
            'fecha_realizacion'	=> '2019-01-25',
            'actividad_id' => 1,

        ]);
        //$aas->actividad()->attach($actividad);

        ActividadExtension::create([
            'lugar'	=> 'UCN Patio',
            'fecha_realizacion'	=> '2019-01-28',
            'actividad_id' => 2,
        ]);



    }
}
