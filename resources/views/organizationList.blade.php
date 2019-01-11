@extends('plantillaGeneral')

@section('tittle')
    <title>Listado Organizaciones</title>

@endsection
@section('contenido')
    </br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1 class="display-4">Acticidad de Titulación</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="15px">#Rut Empresa:</th>
                                <th scope="col" width="15px">Nombre Empresa:</th>
                                <th scope="col" width="15px" >Nombre Responsable:</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($organizaciones as $item)
                                <tr>
                                    <th>{{$item->rut}}</th>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->responsable}}</td>


                                    <td width="10px">
                                        <a href="{{route('agregar-organizaciones.edit',$item->rut )}}" class="btn btn-sm btn-default">
                                            Editar
                                        </a>
                                    </td>

                                    <td width="10px">
                                        {!! Form::open(['route'=>['agregar-organizaciones.destroy',$item->rut], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                        {!! Form::close() !!}
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