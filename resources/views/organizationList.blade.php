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
                    @foreach($organizaciones as $organizations)
                        <tr>

                            <td> {{$organizations->nombre}}     </td>
                            <td> {{$organizations->responsable}}    </td>
                            <td> {{$organizations->rut}}    </td>
                            <td> {{$organizations->tipoEmpresa}}    </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection