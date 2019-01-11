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
    public function __construct(){
        $this->middleware('auth');
    }

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
            return back()->with('info','El alumno titulado ya existe');
        }else{

            $titulado= new Titulado;
            $titulado->rut=$request->get('rut');
            $titulado->nombre=$request->get('nombre');
            $titulado->telefono=$request->get('telefono');
            $titulado->correo=$request->get('email');
            $titulado->empresa=$request->get('nombreEmpresa');
            $titulado->anio=$request->get('anioTitulacion');
            $titulado->carrera=$request->get('carrera');
            $titulado->save();
            return back()
                ->with('info','Se agrego con exito el alumno titulado');
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
        $titulados = Titulado::all();
        return view('admin.titulado.listar-titulados',compact('titulados'));
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
        return view('admin.titulado.edit',compact('titulados'));
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
        return redirect()->route('titulados.index',compact('titulados'))
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
