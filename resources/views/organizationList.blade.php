@extends('plantillaGeneral')

@section('tittle')
    <title>Listar Organizaciones</title>

@endsection
@section('contenido')</br>
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
                        <th> Tipo Empresa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($organizacion as $organizaciones)
                        <tr>
                            <td> {{$organizaciones->nombre}}         </td>
                            <td> {{$organizaciones->responsable}}    </td>
                            <td> {{$organizaciones->rut}}            </td>
                            <td> {{$organizaciones->tipoEmpresa}}    </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection