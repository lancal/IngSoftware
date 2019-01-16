@extends('plantillaGeneral')

@section('tittle')
    <title>Listado de Convenios de Colaboración</title>

    @endsection
    @section('contenido')
    </br>

    <div class="container ">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1 class="display-4">Convenios de Colaboración</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th >#Nombre Convenio:</th>
                                <th scope="col" >Fecha de Inicio:</th>
                                <th scope="col"  >Duración:</th>
                                <th colspan="3">&nbsp;</th>


                            </tr>
                            </thead>
                            <tbody>

                            @foreach($convenios as $item)
                                <tr>
                                    <th>{{$item->nombre}}</th>
                                    <td>{{$item->fecha_inicio}}</td>
                                    <td>{{$item->duracion}}</td>

                                    <td width="10px">
                                        <a href="{{route('listarConvenio',$item->id )}}" class="btn btn-sm btn-link">
                                            Ver
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('convenio.show',$item->id)}}" class="btn btn-sm btn-link">
                                            Evidencia
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