@extends('plantillaGeneral')
@section('tittle')
<title>Listar Actividades de Extension</title>

@endsection

@section('contenido')</br>


    <div class="container ">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver al Menú Principal</a>
        </br>
    </div>

    <div class="container col-md-5">

    <div class="container">

        <div class="card">
            <h4 class="card-header"> Listado de Actividades de Extension</h4>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th >#Titulo:</th>
                        <th scope="col" >Descripcion:</th>
                        <th scope="col" >Expositores:</th>
                        <th scope="col" >Académico Organizador:</th>
                        <th scope="col" >Fecha realización:</th>
                        <th scope="col" >Lugar:</th>
                        <th scope="col" >Cantidad Estudiantes:</th>
                        <th scope="col" >Cantidad Estudiantes:</th>
                        <th scope="col" >Convenio al que pertenece:</th>
                        <th colspan="3">&nbsp;</th>


                    </tr>
                    </thead>
                    <tbody>

                    {{--<?php $actividadesExtension = App\Models\ActividadExtension::all();?>--}}

                    {{--<?php $actividades = App\Models\Actividad::all();?>--}}

                    @foreach($actExtensionShow as $item)
                        <tr>
                        <td> {{$actExtensionShow->lugar}}                     </td>
                        <td> {{$actExtensionShow->fecha_realizacion}}         </td>
                        {{--<td> {{$actividadExtension->responsable}}    </td>--}}

                        {{--<td> {{$organizacion->tipoEmpresa}}    </td>--}}

                        @foreach($actividad as $item)

                            @if ($item->actividad_id == $item->id)
                                    <td>{{$item->descripcion}}</td>
                                    <td>{{$item->titulo}}</td>
                                    <td>{{$item->cantidad_asistentes}}</td>
                            @endif
                        @endforeach

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </br></br>


@endsection