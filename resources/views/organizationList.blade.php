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
                        <h1 class="display-4">Organizaciones</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th >#Rut Empresa:</th>
                                <th scope="col" >Nombre Empresa:</th>
                                <th scope="col"  >Nombre Responsable:</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($organizaciones as $item)
                                <tr>
                                    <th>{{$item->rut}}</th>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->responsable}}</td>


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