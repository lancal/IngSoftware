<?php

namespace App\Http\Controllers;

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
    public function index()
    {

        $academic=Models\Academico::all();
        $dato=Models\Convenio::join('tipo_convenios','tipo_convenios.id','=','convenios.tipo_convenio_id')
            ->join('organizaciones','organizaciones.rut','=','convenios.organizacion_rut')
            ->where('tipo_convenios.nombre','=','A+S')
            ->select('convenios.id as idConvenio','organizaciones.nombre as nombreOrganizacion','organizaciones.rut as rutOrganizacion')->get();


        return view('actividad-aprendizaje-servicio',compact('academic'),compact('dato'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(ActividadAprendizajeServicio $actividadAprendizajeServicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(ActividadAprendizajeServicio $actividadAprendizajeServicio)
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
    public function update(Request $request, ActividadAprendizajeServicio $actividadAprendizajeServicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActividadAprendizajeServicio $actividadAprendizajeServicio)
    {
        //
    }
}
