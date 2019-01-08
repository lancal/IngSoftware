<?php

use Illuminate\Database\Seeder;

use App\Models\TipoAcademico;

use App\Models\Academico;

class Tipo_Academico_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAcademico::truncate();
        //Academico::truncate();

        //$academico = Academico::where('rut', 'nombre','tipo_academico_id')->first();


        TipoAcademico::create([
            'nombre'	=> 'Jefe de Carrera',
            //'tipo_academico_id' =>   1,
            //$academico_actividad_extension->Academico()->attach($academico_actividad_extension)
        ]);

        TipoAcademico::create([
            'nombre'	=> 'Encargado de Vinculacion',
            //'tipo_academico_id' =>   1,
            //$academico_actividad_extension->Academico()->attach($academico_actividad_extension)
        ]);


//        /**
//         *
//         * Crea un Jefe de Carrera
//         *
//         */
//        $tipoacademico = new TipoAcademico();
//        $tipoacademico->nombre = 'Jefe de Carrera';
//        //$tipoacademico->academicos()->attach($academico);
//
//        /**
//         *
//         * Crea un Encargado de Vinculacion
//         *
//         */
//        $tipoacademico = new TipoAcademico();
//        $tipoacademico->nombre = 'Encargado de Vinculacion';
//        //$tipoacademico->academicos()->attach($academico);
    }
}
