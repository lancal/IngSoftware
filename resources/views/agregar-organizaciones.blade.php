@extends('plantillaGeneral')

@section('tittle')
    <title>Agregar Organizaciones</title>

@endsection
@section('contenido')</br>
    <div class="container">
        <div class="card">
            <h4 class="card-header"> Registrar Organizaciones o Empresas</h4>
            <div class="card-body">
                <div class="container">
                    <form action="{{ route('organizaciones') }}" method="POST" role="form">
                        {{ csrf_field() }}


                        @if(count($errors)>0)
                            <div class="'alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre Empresa u Organización</label>
                                <input class="form-control" name="nombre"
                                       placeholder="Ejemplo: Nombre Empresa" value="{{old('nombre') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Responsable</label>
                                <input class="form-control" name="responsable" value="{{old('responsable') }}"
                                placeholder="Ejemplo: Felipe Rivera">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">R.U.T Empresa</label>
                                <input type="Fecha" class="form-control" name="rutEmpresa" value="{{old('rutEmpresa') }}"
                                       placeholder="Ejemplo: 123456789-0">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tipo Empresa</label>
                                <select class="form-control" name="tipoEmpresa" value="{{old('tipoEmpresa') }}">
                                    <option selected>Elija una opción</option>
                                    <option>Empresa</option>
                                    <option>Organización</option>
                                    </select>

                            </div>
                        </div>

                        <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">Agregado Exitosamente</h4>
                                    </div>
                                    <div class="modal-body">
                                        Se ha agregado exitosamente la Organización.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"data-toggle="modal" data-target="#miModal">Confirmar</button>
                    </form>
                </div>
                <hr>
            </div>
        </div>
    </div>

@endsection
