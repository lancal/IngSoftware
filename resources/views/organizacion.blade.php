
@extends('layouts.dashboard')
@section('page_heading','Organizaciones')

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
            <h5 class="card-title">Empresas u Organizaciones</h5>
            <p class="card-text"></p>
            <a href="{{ route('agregar-organizaciones') }}" class="btn btn-primary">Registrar</a>
            <a href="{{ route('organizationList') }}" class="btn btn-primary">Ver Listado</a>
        </div>
    </div>
</div>

@stop