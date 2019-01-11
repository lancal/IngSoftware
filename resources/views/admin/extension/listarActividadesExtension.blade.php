@extends('plantillaGeneral')
@section('tittle')
<title>Listar Actividades de Extension</title>

@endsection

@section('contenido')

    </br>
    <div class="container">

        <div class="card">
            <h4 class="card-header"> Listado de Actividades de Extension</h4>
            <div class="card-body">
                <table>
                    <thead>
                    <tr>

                        <th>Lugar</th>
                        <th>Fecha Realizacion</th>
                        {{--<th> Tipo Empresa</th>--}}


                    </tr>
                    </thead>
                    <tbody>

                    <?php $actividadesExtension = App\Models\ActividadExtension::all();?>

                    @foreach($actividadesExtension as $actividadExtension)
                        {{--<tr>--}}
                        <td> {{$actividadExtension->lugar}}            </td>
                        <td> {{$actividadExtension->fecha_realizacion}}         </td>
                        {{--<td> {{$actividadExtension->responsable}}    </td>--}}

                        {{--<td> {{$organizacion->tipoEmpresa}}    </td>--}}

                        {{--</tr>--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection