<?php

namespace App\Http\Controllers;

use App\Models\Organizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;



class OrganizacionController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.organizacion.agregar-organizaciones');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organizacion.agregar-organizaciones');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $organizacion = Organizacion::create($request->all());
        $rut = $organizacion->rut;

        return redirect()->route('organizaciones.edit',$rut)
            ->with('info','Se agrego con exito la Organización');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $organizaciones = Organizacion::all();
        return view('admin.organizacion.organizationList',compact('organizaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($rut)
    {
        //
        $org = Organizacion::find($rut);


        return view('admin.organizacion.edit',compact('org'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rut)
    {
        //
        $org = Organizacion::find($rut);
        $org->fill($request->all())->save();

        return redirect()->route('organizaciones.edit',compact('org'))
            ->with('info','organizacion actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy($rut)
    {

        $org = Organizacion::find($rut)->delete();

        return back()->with('info', 'Eliminado Correctamente');
    }
}
