<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Evidencia;

class EvidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'evidencia' => 'required|mimes:pdf|max:4096',
            'evidenciaFotos.*' => 'file|mimes:jpeg,jpg|max:10000'

        ]);

        $foldername = $request->nombre.'_'.$request->fecha_inicio;

        $filename = $request->file('evidencia')->store($foldername);

        $evidencias = array(Evidencia::create(['ruta' => $filename,
            'tipo' => 'pdf']));
        if($request->file('evidenciaFotos') != null) {
            foreach ($request->file('evidenciaFotos') as $file) {
                $filename = $file->store($foldername);
                array_push($evidencias, Evidencia::create(['ruta' => $filename, 'tipo' => 'jpg']));
            }
        }

        return $evidencias;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Evidencia $evidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Evidencia $evidencia)
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
    public function update(Request $request, Evidencia $evidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evidencia $evidencia)
    {
        //
    }
}
