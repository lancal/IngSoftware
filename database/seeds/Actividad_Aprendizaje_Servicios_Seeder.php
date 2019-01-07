<?php

use Illuminate\Database\Seeder;

use App\Models\ActividadAprendizajeServicio;

use App\Models\Actividad;

use App\Models\Academico;

class Actividad_Aprendizaje_Servicios_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Actividad::truncate();
        ActividadAprendizajeServicio::truncate();

        //$actividad = Actividad::where('descripcion', 'Es una actividad')->first();
        //Academico::where('rut', 'nombre','tipo_academico_id')->first();

        ActividadAprendizajeServicio::create([
            'asignatura'	=> 'Ing. Software',
            'cantidad_estudiantes'	=> 20,
            'anio' => 2019,
            'semestre' => 1 ,
            //'actividad_id'=> $actividad->id,
            'actividad_id'=> 1,
            'academico_rut' => '171065666',
            //actividad()->attach($actividad)

        ]);

        ActividadAprendizajeServicio::create([
            'asignatura'	=> 'Ing. Software II',
            'cantidad_estudiantes'	=> 25,
            'anio' => 2019,
            'semestre' => 1 ,
            'actividad_id'=> 2,
            'academico_rut' => '192539001',
            //actividad()->attach($actividad)
        ]);

    }
}
