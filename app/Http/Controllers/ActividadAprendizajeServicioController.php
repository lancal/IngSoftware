<?php

namespace App\Http\Controllers;

use App\AcademicoActividadAprendizajeServicio;
use Illuminate\Http\Request;

use App\Models\ActividadAprendizajeServicio;

use App\Models;

class ActividadAprendizajeServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){


        return view('actividadAprendizajeServicio');

    }

    public function index2()
    {

        $academic=Models\Academico::all();
        $dato=Models\Convenio::join('tipo_convenios','tipo_convenios.id','=','convenios.tipo_convenio_id')
            ->join('organizaciones','organizaciones.rut','=','convenios.organizacion_rut')
            ->where('tipo_convenios.nombre','=','A+S')
            ->select('convenios.id as idConvenio','organizaciones.nombre as nombreOrganizacion','organizaciones.rut as rutOrganizacion')->get();


        return view('admin.actividadAprendizajeServicio.actividad-aprendizaje-servicio',compact('academic'),compact('dato'));
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
        $actividad=new Models\Actividad();
        if(isset($request->nombreSocioComunitario1)){
            $actividad= new Models\Actividad();
            $actividad->convenio_id=$request->nombreSocioComunitario1;
            $actividad->descripcion=$request->get('descripcion');
            $actividad->titulo=$request->get('titulo');
            $actividad->cantidad_asistentes=$request->get('cantidad');
            $actividad->save();


        }
        if(isset($request->nombreSocioComunitario2)){
            $actividad= new Models\Actividad();
            $actividad->convenio_id=$request->nombreSocioComunitario2;
            $actividad->descripcion=$request->get('descripcion');
            $actividad->titulo=$request->get('titulo');
            $actividad->cantidad_asistentes=$request->get('cantidad');
            $actividad->save();


        }
        if(isset($request->nombreSocioComunitario3)){
            $actividad= new Models\Actividad();
            $actividad->convenio_id=$request->nombreSocioComunitario3;
            $actividad->descripcion=$request->get('descripcion');
            $actividad->titulo=$request->get('titulo');
            $actividad->cantidad_asistentes=$request->get('cantidad');
            $actividad->save();


        }
        if(isset($request->nombreSocioComunitario4)){
            $actividad= new Models\Actividad();
            $actividad->convenio_id=$request->nombreSocioComunitario4;
            $actividad->descripcion=$request->get('descripcion');
            $actividad->titulo=$request->get('titulo');
            $actividad->cantidad_asistentes=$request->get('cantidad');
            $actividad->save();

        }


        $actividadAprendizajeServicios=new ActividadAprendizajeServicio();
        $actividadAprendizajeServicios->asignatura=$request->get('asignatura');
        $actividadAprendizajeServicios->cantidad_estudiantes=$request->get('cantidad');
        $actividadAprendizajeServicios->anio=$request->get('anio');
        $actividadAprendizajeServicios->actividad_id=$actividad->id;
        if($request->get('semestre')=='Primer Semestre'){
            $actividadAprendizajeServicios->semestre=1;
        }else{
            $actividadAprendizajeServicios->semestre=2;
        }
        $actividadAprendizajeServicios->save();

        if(isset($request->rutProfesor1)){
            $profesorActividad = new AcademicoActividadAprendizajeServicio();
            $profesor = academicos::find($request->rutProfesor1);
            $profesorActividad->academico_rut = $profesor->rut;
            $profesorActividad->act_apren_serv_aca_id  = $actividadAprendizajeServicios->actividad_id;
            $profesorActividad->save();


        }
        if(isset($request->rutProfesor2)){
            $profesorActividad = new AcademicoActividadAprendizajeServicio();
            $profesor = academicos::find($request->rutProfesor2);
            $profesorActividad->academico_rut = $profesor->rut;
            $profesorActividad->act_apren_serv_aca_id  = $actividadAprendizajeServicios->actividad_id;
            $profesorActividad->save();


        }
        if(isset($request->rutProfesor3)){
            $profesorActividad = new AcademicoActividadAprendizajeServicio();
            $profesor = academicos::find($request->rutProfesor3);
            $profesorActividad->academico_rut = $profesor->rut;
            $profesorActividad->act_apren_serv_aca_id  = $actividadAprendizajeServicios->actividad_id;
            $profesorActividad->save();


        }
        if(isset($request->rutProfesor4)){
            $profesorActividad = new AcademicoActividadAprendizajeServicio();
            $profesor = academicos::find($request->rutProfesor4);
            $profesorActividad->academico_rut = $profesor->rut;
            $profesorActividad->act_apren_serv_aca_id  = $actividadAprendizajeServicios->actividad_id;
            $profesorActividad->save();


        }

        return back()
            ->with('info','Se agrego con exito la actividad de aprendizaje mas servicios');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $aprendizaje =ActividadAprendizajeServicio::join('actividades','actividades.id','=','actividad_aprendizaje_servicios.actividad_id')
            ->select('actividades.titulo as title','actividades.descripcion as desc','actividades.cantidad_asistentes as cantAsistentes','actividad_aprendizaje_servicios.asignatura as asig',
                'actividad_aprendizaje_servicios.anio as year','actividad_aprendizaje_servicios.semestre as sem','actividad_aprendizaje_servicios.actividad_id as idAS')->get();


        return view('admin.actividadAprendizajeServicio.listar-actividad-aprendizaje-servicios',compact('aprendizaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($idActividadAprendizajeServicio)
    {
        $actividad=Models\Actividad::find($idActividadAprendizajeServicio);
        $actividadAS=ActividadAprendizajeServicio::all()->where('actividad_id','=',$idActividadAprendizajeServicio)->first();
        $academic=Models\Academico::all();
        $dato=Models\Convenio::join('tipo_convenios','tipo_convenios.id','=','convenios.tipo_convenio_id')
            ->join('organizaciones','organizaciones.rut','=','convenios.organizacion_rut')
            ->where('tipo_convenios.nombre','=','A+S')
            ->select('convenios.id as idConvenio','organizaciones.nombre as nombreOrganizacion','organizaciones.rut as rutOrganizacion')->get();

        return view('admin.actividadAprendizajeServicio.edit',compact('actividad','actividadAS','academic','dato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update($actividadAprendizajeServicio)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActividadAprendizajeServicio $actividadAprendizajeServicio)
    {

    }
}
