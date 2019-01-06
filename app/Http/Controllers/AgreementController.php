<?php

namespace App\Http\Controllers;

use App\Agreement;
use App\Organization;
use Illuminate\Http\Request;

class AgreementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('convenios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('convenios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //dd($request->all());
       // $convenio = new Agreement();
        //$convenio-> nombre = $request->input('nombre');
        //$convenio-> rutaEvidencia = 'ruta1';
        //$convenio-> duracion = $request->input('duracion');
        //$convenio-> fechaInicio = $request->input('fechaInicio');
        //$convenio-> identificador = 'id1';

        //$convenio-> tipoConvenio = $request->input('tipoConvenio');
        //$convenio->organization_id ='1';
        //$convenio->save();
        //Agreement::create($request->all());
       // return 'Store';
        $this->validate($request, [
           'rutaEvidencia' => 'required',
            'duracion' => 'required',
            'fechaInicio' => 'required',
            'identificador' => 'required',
            'tipoConvenio' => 'required',
            'organization_id' => 'required',
        ]);

        $convenio = new Agreement();
        $convenio->rutaEvidencia = $request->input('rutaEvidencia');
        $convenio->duracion = $request->input('duracion');
        $convenio->fechaInicio= $request->input('fechaInicio');
        $convenio->identificador = $request->input('identificador');
        $convenio->tipoConvenio = $request->input('tipoConvenio');

        $nombreEmpresa = Organization::all();

        $convenio->organization_id = $request->input('organization_id');

        //$convenio->nombreEmpresa = $request->input('organization_id');
        $convenio->save();



        return view('convenios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function show(Agreement $agreement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function edit(Agreement $agreement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agreement $agreement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agreement  $agreement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agreement $agreement)
    {
        //
    }
}