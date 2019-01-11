<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use App\Models\AcademicoActividadExtension;
use App\Models\Actividad;
use App\Models\Expositor;
use App\Models\Indicador;
use App\Models\Convenio;
use App\Models\ActividadExtensionesExpositores;
use Illuminate\Http\Request;
use App\Models;
use App\Models\ActividadExtension;

class ActividadExtensionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academic=Models\Academico::all();
        $convenio1=Models\Convenio::all();
        return view('actividad-extension',compact('academic','convenio1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $indicador = Indicador::all();
        $indicador->cantidadActExt = ActividadExtension::all()->count();
        $academic=Models\Academico::all();
        $convenio1=Models\Convenio::all();

        //dd($request);
        $actividad = new Actividad();
        $actividad->titulo = $request->titulo;
        $actividad->descripcion = $request->descripcion;
        $convenio = Convenio::find($request->convenio);
        $actividad->convenio_id = $convenio->id;
        $actividad->cantidad_asistentes = $request->cantidad;

        $actividad->save();

        $actividadExtension = new ActividadExtension();
        $actividadExtension->lugar = $request->lugar;
        $actividadExtension->fecha_realizacion = $request->fechaRealizacion;
        $actividadExtension->actividad_id = $actividad->id;



        if(isset($request->nombreExpositor1)){
            $expositor = new Expositor();
            $expositor->nombre = $request->nombreExpositor1;
            $expositor->save();
            $expositorActividad = new ActividadExtensionesExpositores();
            $expositorActividad->expositor_id = $expositor->id;
            $expositorActividad->act_ext_actividad_id = $actividadExtension->actividad_id;
            $expositorActividad->save();
        }


        if(isset($request->nombreExpositor2)){
            $expositor = new Expositor();
            $expositor->nombre = $request->nombreExpositor2;
            $expositor->save();
            $expositorActividad = new ActividadExtensionesExpositores();
            $expositorActividad->expositor_id = $expositor->id;
            $expositorActividad->act_ext_actividad_id = $actividadExtension->actividad_id;
            $expositorActividad->save();

        }
        if(isset($request->nombreExpositor3)){
            $expositor = new Expositor();
            $expositor->nombre = $request->nombreExpositor3;
            $expositor->save();
            $expositorActividad = new ActividadExtensionesExpositores();
            $expositorActividad->expositor_id = $expositor->id;
            $expositorActividad->act_ext_actividad_id = $actividadExtension->actividad_id;
            $expositorActividad->save();

        }
        if(isset($request->nombreExpositor4)){
            $expositor = new Expositor();
            $expositor->nombre = $request->nombreExpositor4;
            $expositor->save();
            $expositorActividad = new ActividadExtensionesExpositores();
            $expositorActividad->expositor_id = $expositor->id;
            $expositorActividad->act_ext_actividad_id = $actividadExtension->actividad_id;
            $expositorActividad->save();
        }

        if(isset($request->nombreProfesor1)){
            $organizadorExtension = new AcademicoActividadExtension();
            $organizador = Academico::find($request->nombreProfesor1);
            $organizadorExtension->academico_rut = $organizador->rut;
            $organizadorExtension->act_ext_actividad_id = $actividadExtension->actividad_id;
            $organizadorExtension->save();

        }
        if(isset($request->nombreProfesor2)){
            $organizadorExtension = new AcademicoActividadExtension();
            $organizador = Academico::find($request->nombreProfesor2);
            $organizadorExtension->academico_rut = $organizador->rut;
            $organizadorExtension->act_ext_actividad_id = $actividadExtension->actividad_id;
            $organizadorExtension->save();
        }
        if(isset($request->nombreProfesor3)){
            $organizadorExtension = new AcademicoActividadExtension();
            $organizador = Academico::find($request->nombreProfesor3);
            $organizadorExtension->academico_rut = $organizador->rut;
            $organizadorExtension->act_ext_actividad_id = $actividadExtension->actividad_id;
            $organizadorExtension->save();
        }
        if(isset($request->nombreProfesor4)){
            $organizadorExtension = new AcademicoActividadExtension();
            $organizador = Academico::find($request->nombreProfesor4);
            $organizadorExtension->academico_rut = $organizador->rut;

            $organizadorExtension->act_ext_actividad_id = $actividadExtension->actividad_id;
            $organizadorExtension->save();
        }

        $actividadExtension->save();
        $expositor->save();
        $organizadorExtension->save();

        return view('actividad-extension',compact('academic','convenio1'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(ActividadExtension $actividadExtension)
    {
        return view('listarActividadesExtension');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(ActividadExtension $actividadExtension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActividadExtension $actividadExtension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActividadExtension $actividadExtension)
    {
        //
    }
}
