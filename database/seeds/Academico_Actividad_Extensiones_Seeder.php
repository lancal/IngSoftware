<?php

use Illuminate\Database\Seeder;

use App\Models\AcademicoActividadExtension;

class Academico_Actividad_Extensiones_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicoActividadExtension::truncate();

        AcademicoActividadExtension::create([
            'academico_rut'	=> '171065666',
            'act_ext_actividad_id'	=> 1
        ]);

        AcademicoActividadExtension::create([
            'academico_rut'	=> '192539001',
            'act_ext_actividad_id'	=> 2
        ]);
    }
}
