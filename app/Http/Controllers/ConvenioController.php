<?php

namespace App\Http\Controllers;

use App\Models\Evidencia;
use App\Models\Organizacion;
use App\Models\TipoConvenio;
use Illuminate\Http\Request;

use App\Models\Convenio;
use function Sodium\compare;

class ConvenioController extends Controller
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

        return view('convenio');

    }

    public function index2()
    {
        $org=Organizacion::all();
        $tipo_convenio=TipoConvenio::all();
        return view('admin.convenio.convenios',compact('org'),compact('tipo_convenio'));
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
        /**
         * $table->string('ruta',255);
        $table->string('tipo',255);
        $table->unsignedInteger('convenio_id')->nullable();
        $table->unsignedInteger('actividad_id')->nullable();
         */
        $convenio =  new Convenio();
        $organizacion = Organizacion::find($request->organizacion_rut);
        $convenio->nombre = $organizacion->nombre;
        $convenio->fecha_inicio = $request->fecha_inicio;
        $convenio->duracion = $request->duracion;
        $convenio->organizacion_rut = $organizacion->rut;
        $convenio->tipo_convenio_id = $request->tipo_convenio_id;

        $convenio->save();
        $evidenciaController = new EvidenciaController;

        $evidencias = $evidenciaController->store($request,'convenio');

        $evidencias[0]->convenio()->associate($convenio);

        $evidencias[0]->save();
        


        $tipoConvenio=TipoConvenio::find($convenio->tipo_convenio_id);
        $tipo_convenio=TipoConvenio::all();
        $org=Organizacion::all();


        return redirect()->route('convenio.edit',$convenio->id)
            ->with('info','Se agrego con exito el convenio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $convenios = Convenio::all();

        return view('admin.convenio.show',compact('convenios'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mostrarConvenio($id){
        $convenio = Convenio::find($id);
        //dd($convenio);
        $tipoConvenio= TipoConvenio::find($convenio->tipo_convenio_id);
        $org = Organizacion::find($convenio->organizacion_rut);

        return view('admin.convenio.mostrar',compact('convenio', 'tipoConvenio','org'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $convenio = Convenio::find($id);
        $tipoConvenio=TipoConvenio::find($convenio->tipo_convenio_id);
        $tipo_convenio=TipoConvenio::all();
        $org = Organizacion::all();
        $organizacion = Organizacion::find($convenio->organizacion_rut);
        //dd($organizacion);
        return view('admin.convenio.edit',compact('org','convenio', 'tipo_convenio', 'tipoConvenio', 'organizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $convenio = Convenio::find($id);

        $organizacion = Organizacion::find($request->organizacion_rut);
        $convenio->nombre = $organizacion->nombre;
        $convenio->fecha_inicio = $request->fecha_inicio;
        $convenio->duracion = $request->duracion;
        $convenio->organizacion_rut = $organizacion->rut;
        $convenio->tipo_convenio_id = $request->tipo_convenio_id;

        $convenio->save();
        $tipoConvenio=TipoConvenio::find($convenio->tipo_convenio_id);
        $tipo_convenio=TipoConvenio::all();
        $org=Organizacion::all();

        return redirect()->route('convenio.edit',$id)
            ->with('info','Convenio actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $convenio = Convenio::find($id)->delete();

        return back()->with('info', 'Eliminado Correctamente');

    }

    public function mostrarEvidencia($id){
        $path = Convenio::find($id)->evidencia->ruta;

        $pdf = (storage_path( "app/{$path}"));

        return response()->file($pdf,['Content-Type: application/pdf']);
    }


}
