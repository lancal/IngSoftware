{{--@extends('plantillaGeneral')--}}

@extends('layouts.dashboard')
@section('page_heading','Listar Titulados')


@section('section')
    </br>
    <div class="container ">
        <a href="{{ route('titulado') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1 class="display-4">Titulados</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th >Nombre:</th>
                                <th scope="col" >Rut:</th>
                                <th scope="col"  >Telefono:</th>
                                <th scope="col"  >Correo:</th>
                                <th scope="col"  >Empresa:</th>
                                <th scope="col"  >Año de Titulacion:</th>
                                <th scope="col"  >Carrera:</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($titulados as $item)
                                <tr>
                                    <th>{{$item->nombre}}</th>
                                    <td>{{$item->rut}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->correo}}</td>
                                    <td>{{$item->empresa}}</td>
                                    <td>{{$item->anio}}</td>
                                    <td>{{$item->carrera}}</td>


                                    <td >
                                        <a href="{{route('titulados.edit',$item->rut )}}" class="btn btn-sm btn-link">
                                            Editar
                                        </a>
                                    </td>

                                    <td >

                                        <form action="{{route('titulados.destroy',$item->rut)}}" method="POST">
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


@stop