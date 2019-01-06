@extends('plantillaGeneral')


@section('tittle')
    <title>Registrar Convenios de Colaboración</title>

    @endsection

    @section('form')
    </br>
    <div class="container ">
        <a href="javascript:history.back()" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>

    <div class="container col-md-5">

        <div class="card">
            <h4 class="card-header"> Registrar Convenios de Colaboración</h4>
            <div class="card-body">
                <div class="container">

                    <form onsubmit="return alert('Agregado Exitosamente');" action="{{ route('organizaciones') }}" method="POST" role="form" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('nombreEmpresa') ? ' has-error' : '' }}">
                                <label for="nombreEmpresa">Nombre Empresa u Organización (*)</label>
                                <input class="form-control" id="nombreEmpresa" name="nombreEmpresa"
                                       placeholder="Ejemplo: Nombre Empresa" required autofocus>

                                @if ($errors->has('nombreEmpresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombreEmpresa') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('tipoConvenio') ? ' has-error' : '' }}">
                                <label for="tipoConvenio">Tipo Convenio (*)</label>
                                <select class="form-control" id="tipoConvenio" name="tipoConvenio" required autofocus>
                                    <option value="">Elija una opción</option>
                                    <option>Capstone</option>
                                    <option>Marco</option>
                                    <option>Específico</option>
                                    <option>A+S</option>
                                </select>
                                @if ($errors->has('tipoConvenio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipoConvenio') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
                                <label for="fechaInicio">Fecha Inicio Convenio (*)</label>
                                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio"
                                       required autofocus>


                                @if ($errors->has('fechaInicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechaInicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('duracion') ? ' has-error' : '' }}">
                                <label for="duracion">Duracion Convenio</label>
                                <input type="Fecha" class="form-control" id="duracion" name="duracion"
                                       placeholder="Ejemplo: 2 años" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf) del Texto con Firmas del
                                    Convenio</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <label for="subtituloForm">(*) Campo obligatorio.</label>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="margin: 10px">Confirmar</button>

                            <a href="javascript:history.back()" class="btn btn-primary"> Cancelar</a>
                        </div>
                        </br>
                    </form>

                </div>
                <hr>
            </div>

        </div>

    </div>
    </br></br>
@endsection
