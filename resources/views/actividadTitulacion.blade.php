{{--@extends('plantillaGeneral')--}}

{{--@section('tittle')--}}
{{--<title>Inicio</title>--}}

{{--@endsection--}}
@extends('layouts.dashboard')
@section('page_heading','Actividades de Titulacion')

@section('section')

</br>

<div class="container ">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
    </br>
</div>


<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Actividad de Titulación por Convenio</h5>
            <p class="card-text"></p>
            <a href="{{ route('registrar-titulacion-convenio') }}" class="btn btn-primary">Registrar</a>
            <a href="#" class="btn btn-primary">Ver Listado</a>
        </div>
    </div>
</div>

@endsection