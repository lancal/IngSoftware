@extends('plantillaGeneral')

@section('tittle')
    <title>Editar Actividades de Extension</title>

@endsection

@section('contenido')</br>

    <div class="container col-md-5">
        <div class="card">
            <h4 class="card-header"> Editar Actividades de Extension</h4>
            <div class="card-body">
                <div class="container">
                    <form name="form" action="{{ route('actividadesExtension.update',$actividad->idActividad) }}" method="POST" role="form" >
                        {{ csrf_field() }}
                        {!! method_field('PUT') !!}


                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('descripcion') ? ' has-error' : '' }}">
                                <label for="nombre">Descripcion Actividad de Extension(*)</label>
                                <input class="form-control" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                       placeholder="Ingrese Nombre de la Empresa o Organización" required autofocus value="{{$actividad->descripcion}}">
                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('responsable') ? ' has-error' : '' }}">
                                <label for="responsable">Responsable (*)</label>
                                <input class="form-control" name="responsable" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" required autofocus
                                       placeholder="Ingrese Nombre del Responsable" value="{{$org->responsable}}">
                                @if ($errors->has('responsable'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('responsable') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('rut') ? ' has-error' : '' }}">
                                <label for="rut">R.U.T Empresa</label>
                                <input S class="form-control" name="rut" required autofocus
                                       placeholder="Ingrese RUT de la Empresa" value="{{$org->rut}}">
                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <label for="subtituloForm">(*) Campo obligatorio.</label>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="margin: 10px">Confirmar</button>
                        </div>
                        </br>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    </br></br>

@endsection