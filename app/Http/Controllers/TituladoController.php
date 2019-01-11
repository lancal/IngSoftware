<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Titulado;
use Illuminate\Support\Facades\Input;

class TituladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrar-titulados');
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
        if (Titulado::where('rut', $request->rut , Input::get('rut'))->exists()) {
            return view ('registrar-titulados');
        }else{

            $titulado= new Titulado;
            $titulado->rut=$request->get('rut');
            $titulado->nombre=$request->get('nombre');
            $titulado->telefono='+569'.($request->get('telefono'));
            $titulado->correo=$request->get('email');
            $titulado->empresa=$request->get('cantidad');
            $titulado->anio=$request->get('anioTitulacion');
            $titulado->carrera=$request->get('carrera');
            $titulado->save();
            return view ('registrar-titulados');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('listar-titulados',compact('titulados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($rut)
    {
        $titulados =Titulado::find($rut);

        return view('titulados.edit',compact('titulados'));
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
        $titulados = Titulado::find($rut);
        $titulados->fill($request->all())->save();

        return redirect()->route('titulados.edit',compact('titulados'))
            ->with('info','alumno titulado actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy($rut)
    {
        $titulados = Titulado::find($rut)->delete();
        return back()->with('info', 'Eliminado Correctamente');
    }
}
