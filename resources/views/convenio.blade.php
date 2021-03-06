
@extends('layouts.dashboard')
@section('page_heading','Convenios')

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
            <h5 class="card-title">Convenios de Colaboración</h5>
            <p class="card-text"></p>
            <a href="{{ route('convenioRegistrar') }}" class="btn btn-primary">Registrar</a>
            <a href="{{ route('showConvenios')}}" class="btn btn-primary">Ver Listado</a>
        </div>
    </div>
</div>

@stop