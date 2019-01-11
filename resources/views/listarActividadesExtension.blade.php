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

                        <th>Lugar </th>
                        <th>Fecha Realizacion </th>
                        <th>Descripcion </th>
                        <th>Titulo </th>
                        <th>Cantidad Asistentes</th>

                        {{--<th> Tipo Empresa</th>--}}


                    </tr>
                    </thead>
                    <tbody>

                    <?php $actividadesExtension = App\Models\ActividadExtension::all();?>

                    <?php $actividades = App\Models\Actividad::all();?>

                    @foreach($actividadesExtension as $actividadExtension)
                        <tr>
                        <td> {{$actividadExtension->lugar}}                     </td>
                        <td> {{$actividadExtension->fecha_realizacion}}         </td>
                        {{--<td> {{$actividadExtension->responsable}}    </td>--}}

                        {{--<td> {{$organizacion->tipoEmpresa}}    </td>--}}

                        @foreach($actividades as $actividad)

                            @if ($actividadExtension->actividad_id == $actividad->id)
                                    <td>{{$actividad->descripcion}}</td>
                                    <td>{{$actividad->titulo}}</td>
                                    <td>{{$actividad->cantidad_asistentes}}</td>
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