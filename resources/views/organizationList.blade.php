@extends('plantillaGeneral')

@section('tittle')
    <title>Listar Organizaciones</title>

@endsection
@section('contenido')
    </br>
    <div class="container">

        <div class="card">
            <h4 class="card-header"> Listado de Organizaciones</h4>
            <div class="card-body">
                <table>
                    <thead>
                    <tr>

                        <th> Nombre</th>
                        <th> Responsable</th>
                        <th> Rut</th>
                        {{--<th> Tipo Empresa</th>--}}


                    </tr>
                    </thead>
                    <tbody>

                    <?php $organizaciones = App\Models\Organizacion::all();?>

                    @foreach($organizaciones as $organizacion)
                        {{--<tr>--}}
                        <td> {{$organizacion->rut}}            </td>
                        <td> {{$organizacion->nombre}}         </td>
                        <td> {{$organizacion->responsable}}    </td>

                            {{--<td> {{$organizacion->tipoEmpresa}}    </td>--}}

                        {{--</tr>--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection