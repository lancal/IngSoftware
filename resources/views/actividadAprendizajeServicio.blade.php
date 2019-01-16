@extends('plantillaGeneral')

{{--@section('tittle')--}}
{{--<title>Inicio</title>--}}

{{--@endsection--}}

@section('contenido')

</br>


<div class="container ">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
    </br>
</div>

<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Actividad de Aprendizaje + Servicio</h5>
            <p class="card-text"></p>
            <a href="{{ route('actividad-aprendizaje-servicio') }}" class="btn btn-primary">Registrar</a>
            <a href="{{ route('actividadAprendizajeServiciosList') }}" class="btn btn-primary">Ver Listado</a>
        </div>
    </div>
</div>


@endsection