@extends('plantillaGeneral')

@section('tittle')
    <title>Convenio:</title>

@endsection
@section('contenido')
</br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <h1 class="display-4">Convenio de Colaboración</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th >#Nombre Convenio:</th>
                                <th scope="col" >Fecha de Inicio:</th>
                                <th scope="col"  >Duración:</th>
                                <th scope="col"  >Empresa:</th>
                                <th scope="col"  >Tipo Convenio:</th>
                                <th colspan="3">&nbsp;</th>


                            </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <th>{{$convenio->nombre}}</th>
                                    <td>{{$convenio->fecha_inicio}}</td>
                                    <td>{{$convenio->duracion}}</td>
                                    <td>{{$org->nombre}}</td>
                                    <td>{{$tipoConvenio->nombre}}</td>




                                </tr>


                            </tbody>
                        </table>


                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection