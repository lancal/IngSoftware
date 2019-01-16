<?php

namespace App\Http\Controllers;

use App\Models\Academico;
use Illuminate\Http\Request;

use App\Models\ActividadTitulacion;

use App\Models;

class ActividadTitulacionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        return view('actividadTitulacion');


    }

    public function index2()
    {
        /**
         *  $academic=Models\Academico::all();
        $dato=Models\Convenio::join('tipo_convenios','tipo_convenios.id','=','convenios.tipo_convenio_id')
        ->join('organizaciones','organizaciones.rut','=','convenios.organizacion_rut')
        ->where('tipo_convenios.nombre','=','A+S')
        ->select('convenios.id as idConvenio','organizaciones.nombre as nombreOrganizacion','organizaciones.rut as rutOrganizacion')->get();

         */


        $org=Models\Organizacion::all();

        //$dato = Models\Organizacion::join();

        $academicos = Academico::all();


        return view('admin.actividadTitulacion.registrar-titulacion-convenio',compact('org','academicos'));
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
        //dd($request);
        /**
         * <!--$table->date('fecha_inicio');
        $table->date('fecha_termino')->nullable();
        $table->string('lugar',255);
        $table->unsignedInteger('actividad_id')->primary();

        $table->unsignedInteger('convenio_id');
        $table->text('descripcion');
        $table->string('titulo', 255);
        $table->unsignedInteger('cantidad_asistentes');
        -->
         */
        $academic=Models\Academico::all();
        $convenio1=Models\Convenio::all();

        //dd($request);
        $actividad = new Models\Actividad();
        $actividad->titulo = $request->titulo;
        $actividad->descripcion = $request->descripcion;
        //$org = Models\Organizacion::find($request->organizacion_rut);
        $convenio = Models\Convenio::find($request->organizacion_rut);
        dd($convenio);
        $actividad->convenio_id = $convenio->id;
        $actividad->cantidad_asistentes = 0;

        $actividad->save();

        $actividadTitulacion = new ActividadTitulacion();
        $actividadTitulacion->fecha_inicio = $request->fechaInicio;
        $actividadTitulacion->fecha_termino = $request->fechaTermino;
        $actividadTitulacion->lugar = 'Disc';
        $actividadTitulacion->actividad_id = $actividad->id;
        $actividadTitulacion->save();

        /**
         * $table->string('rut',13)->primary()->unique();
        $table->string('nombre',255);
        $table->string('carrera');
        $table->unsignedInteger('actividad_titulaciones_actividad_id');
         */
        foreach ($request->all() as $req){
            $estudiante = new Models\Estudiante();
            $estudiante->nombre = $req['nombre'];
            $estudiante->rut = $req['rut'];
            $estudiante->carrera = $req['carrera'];
            $estudiante->save();
        }




        //$indicador = Indicador::all();
        //$suma=1;
        //  $indicador->cantidadActividades = $indicador.cantidadActividades + $suma;




        return view('registrar-titulacion-convenio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(ActividadTitulacion $actividadTitulacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(ActividadTitulacion $actividadTitulacion)
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
    public function update(Request $request, ActividadTitulacion $actividadTitulacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActividadTitulacion $actividadTitulacion)
    {
        //
    }
}
