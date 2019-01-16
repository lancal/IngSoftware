@extends('plantillaGeneral')

@section('tittle')
    <title>Listado de Actividades de Extensión</title>

    @endsection

    @section('contenido')

    <br>
    <div class="container ">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>
    </br>

    <div class="container">
        <div class="row">
            <div >
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1 class="display-4">Actividades de Extensión</h1>
                        <table class="table table-striped table-hover table-bordered ">
                            <thead>
                            <tr>
                                <th style="width:15%">#Titulo</th>
                                <th scope="col" >Tipo</th>
                                <th style="width:15%" scope="col" >Descripción</th>
                                <th style="width:20%" scope="col" >Expositores</th>
                                <th style="width:20%" scope="col" >Académico Organizador</th>
                                <th scope="col" >Lugar</th>
                                <th scope="col" >Fecha realización</th>
                                <th scope="col" >Cantidad Estudiantes</th>
                                <th scope="col" >Convenio al que pertenece</th>
                                <th colspan="3">&nbsp;</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($actividad as $item)
                                <tr>
                                    <th>{{$item->titulo}}</th>
                                    <td>Ejemplo</td>
                                    <td>{{$item->descripcion}}</td>
                                    <td>
                                            @foreach($expositorAct as $expAct)

                                                @if($item->id == $expAct->id)
                                                - {{$expAct->nombre}}<br>
                                                @endif
                                            @endforeach


                                     </td>

                                    <td>
                                        @foreach($academico as $profAct)

                                            @if($item->id == $profAct->id)
                                                - {{$profAct->nombreProfesor}}<br>
                                            @endif
                                        @endforeach


                                    </td>

                                @foreach($actExtensionShow as $act)
                                        @if($item->id == $act->actividad_id)
                                            <td> {{$act->lugar}}            </td>
                                            <td> {{$act->fecha_realizacion}}         </td>
                                        @endif
                                    @endforeach

                                    <td>{{$item->cantidad_asistentes}}</td>
                                    <td></td>
                                    <td width="10px">
                                        <a href="{{route('listarConvenio',$item->id )}}" class="btn btn-sm btn-link">
                                            ver
                                        </a>
                                    </td>

                                    <td >
                                        <a href="{{route('convenio.edit',$item->id )}}" class="btn btn-sm btn-link">
                                            Editar
                                        </a>
                                    </td>

                                    <td >

                                        <form action="{{route('convenio.destroy',$item->id)}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>


                                    </td>

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