<?php

use Illuminate\Database\Seeder;

use App\Models\Academico;

use App\Models\AcademicoActividadExtension;

use App\Models\ActividadExtension;

use App\Models\Actividad;

class Academico_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Academico::truncate();
        //AcademicoActividadExtension::truncate();
        //ActividadAprendizajeServicio::truncate();

        //$actividadExtension = ActividadExtension::where('lugar', 'fecha_realizacion','actividad_id')->first();

        //$actividad = Actividad::where('descripcion', 'titulo','cantidad_asistentes')->first();


        Academico::create([
            'rut'	=> '171065666',
            'nombre'	=> 'Alan',
            'tipo_academico_id' =>   '1',
            //$academico_actividad_extension->Academico()->attach($academico_actividad_extension)
        ]);

        Academico::create([
            'rut'	=> '192539001',
            'nombre'	=> 'Pedro',
            'tipo_academico_id' =>   '2',
            //$academico_actividad_extension->Academico()->attach($academico_actividad_extension)
        ]);





//        /**
//         *
//         * Crea un Academico
//         *
//         */
//        $academico = new Academico();
//        $academico->rut = '171065666';
//        $academico->nombre = 'Alan';
//        $academico->tipo_academico_id = '1';
//        //$academico->actividadExtensiones()->attach($actividadExtension);
//
//
//        /**
//         *
//         * Crea un Academico
//         *
//         */
//        $academico = new Academico();
//        $academico->rut = '192539001';
//        $academico->nombre = 'Pedro';
//        $academico->tipo_academico_id = '2';
//        //$academico->actividadExtensiones()->attach($actividadExtension);








    }
}
