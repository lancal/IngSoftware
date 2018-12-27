@extends('plantillaGeneral')

@section('tittle')
    <title>Inicio</title>

@endsection

@section('contenido')
    <div class="container">
        </br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Convenios de Colaboración</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('convenios') }}" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad de Extensión</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('actividad-extension') }}" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad de Aprendizaje + Servicio</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('actividad-aprendizaje-servicio') }}" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
