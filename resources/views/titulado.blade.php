
@extends('layouts.dashboard')
@section('page_heading','Titulados')
{{--@section('tittle')--}}
{{--<title>Inicio</title>--}}

{{--@endsection--}}

@section('section')

</br>

<div class="container ">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
    </br>
</div>


<div class="col-sm-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Titulados</h5>
            <p class="card-text"></p>
            <a href="{{ route('registrar-titulados') }}" class="btn btn-primary">Registrar</a>
            <a href="{{ route('tituladoList') }}" class="btn btn-primary">Ver Listado</a>
        </div>
    </div>
</div>

@stop