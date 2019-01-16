@extends('layouts.dashboard')
@section('page_heading','Listado Actividades Aprendizaje mas Servicios')


    @section('section')
    </br>
    <div class="container ">
        <a href="{{ route('actividadAprendizajeServicio') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1 class="display-4">Actividades A+S</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th >Titulo:</th>
                                <th scope="col" >Descripcion:</th>
                                <th scope="col"  >Cantidad de asistentes:</th>
                                <th scope="col"  >Asignatura:</th>
                                <th scope="col"  >Año realizado:</th>
                                <th scope="col"  >Semestre realizado:</th>
                                <th scope="col"  >Academico encargado:</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($aprendizaje as $item)
                                <tr>
                                    <th>{{$item->title}}</th>
                                    <td>{{$item->desc}}</td>
                                    <td>{{$item->cantAsistentes}}</td>
                                    <td>{{$item->asig}}</td>
                                    <td>{{$item->year}}</td>
                                    <td>{{$item->sem}}</td>
                                    <td>{{$item->name}}</td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection