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

<<<<<<< HEAD
                            <td> {{$organizations->nombre}}     </td>
                            <td> {{$organizations->responsable}}    </td>
                            <td> {{$organizations->rut}}    </td>
                            <td> {{$organizations->tipoEmpresa}}    </td>
=======
                            <td> {{$organizations->nombre}}</td>
                            <td> {{$organizations->responsable}}</td>
                            <td> {{$organizations->rut}}</td>
                            <td> {{$organizations->tipoEmpresa}}</td>
>>>>>>> 2239a7af8f894e7acac0dfcf34423d3b360e5ef6
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection