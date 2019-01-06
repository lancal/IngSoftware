<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agregar-organizaciones');
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
        $this->validate($request, [
                       'nombreEmpresa' => 'required',
                        'responsable' => 'required',
                        'rutEmpresa' => 'required',
                        'tipoEmpresa' => 'required',
                    ]);

           //dd($request->all());
           $empresa = new Organization();
           $empresa->nombre = $request->input('nombreEmpresa');
           $empresa->responsable = $request->input('responsable');
           $empresa->rut = $request->input('rutEmpresa');
           $empresa->tipoEmpresa = $request->input('tipoEmpresa');
            $empresa->save();

           return view('agregar-organizaciones');

           // return;
        }


    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    //public function show(Organization $organization)

    public function show()

    {
        $organizaciones = Organization::all();

        return view('organizationList',compact('organizaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
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
    public function update(Request $request, Organization $organization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
