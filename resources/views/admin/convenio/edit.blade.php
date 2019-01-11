@extends('plantillaGeneral')


@section('tittle')
    <title>Editar Convenio de Colaboración</title>

    @endsection

    @section('form')
    </br>
    <div class="container ">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver al Menú Principal</a>


        </br>
    </div>




    <div class="container col-md-6">
        <div class="card">
            <h4 class="card-header"> Editar Convenio de Colaboración</h4>
            <div class="card-body">
                <div class="container">

                    <form  action="{{ route('convenio.update',$convenio->id) }}" method="POST" role="form" name="form" >
                        {{ csrf_field() }}
                        {!! method_field('PUT') !!}



                        <div class="col-md-12">
                            <div class="form-row" >
                                <div class="form-group col-md-9 {{ $errors->has('organizacion_rut') ? ' has-error' : '' }}">
                                    <label for="organizacion_rut">Nombre Empresa u Organización (*)</label>
                                    <select class="form-control" name="organizacion_rut" id="organizacion_rut"
                                            pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                            placeholder="Ingrese Organizacion" required autofocus>
                                        <option value="{{$organizacion->rut}}">{{$organizacion->nombre}}</option>

                                        @foreach($org as $tipo)
                                            <option value="{{$tipo->rut}}">{{$tipo->nombre}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('organizacion_rut'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('organizacion_rut') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3 ">
                                    <label for="organizacion_rut">Si no se encuentra:</label>
                                    <a href="{{ route('agregar-organizaciones') }}" class="btn btn-secondary">Agregar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-row" >
                                <div class="form-group col-md-7  {{ $errors->has('tipo_convenio_id') ? ' has-error' : '' }}">
                                    <label for="tipo_convenio_id">Tipo Convenio (*)</label>

                                    <select class="form-control" name="tipo_convenio_id" id="tipo_convenio_id"
                                            pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                            placeholder="Ingrese el tipo de convenio" required autofocus>
                                        <option value="{{$tipoConvenio->id}}">{{$tipoConvenio->nombre}}</option>

                                        @foreach($tipo_convenio as $tipo)

                                            <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('tipo_convenio_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tipo_convenio_id') }}</strong>
                                    </span>
                                    @endif

                                </div>

                                <div class="form-group col-md-5 {{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                                    <label for="fecha_inicio">Fecha Inicio Convenio (*)</label>
                                    <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio"
                                           required autofocus value="{{$convenio->fecha_inicio}}">


                                    @if ($errors->has('fecha_inicio'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fecha_inicio') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('duracion') ? ' has-error' : '' }}">
                                <label for="duracion">Duracion Convenio</label>
                                <input type="Fecha" class="form-control" id="duracion" name="duracion"
                                       placeholder="Ingrese Duracion del Convenio" required autofocus value="{{$convenio->duracion}}">
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf) del Texto con Firmas del
                                    Convenio</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <hr>
                        <label for="subtituloForm">(*) Campo obligatorio.</label>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="margin: 10px">Confirmar</button>

                        </div>
                    </form>
                </div>
                <hr>
            </div>
        </div>
    </div>
    </br></br>
@endsection