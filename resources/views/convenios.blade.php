@extends('plantillaGeneral')


@section('tittle')
    <title>Registrar Convenios de Colaboración</title>

    @endsection

    @section('form')
    </br>
    <div class="container ">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver al Menú Principal</a>


        </br>
    </div>

    <div class="container col-md-6">
        <div class="card">
            <h4 class="card-header"> Registrar Convenios de Colaboración</h4>
            <div class="card-body">
                <div class="container">

                    <form onsubmit="return alert('Agregado Exitosamente');" autocomplete="off">
                        {{ csrf_field() }}


                        <div class="col-md-12">
                            <div class="form-row" >
                                <div class="form-group col-md-9 {{ $errors->has('nombreEmpresa') ? ' has-error' : '' }}">
                                    <label for="nombreEmpresa">Nombre Empresa u Organización (*)</label>
                                    <input class="form-control" id="nombreEmpresa" name="nombreEmpresa"
                                           placeholder="Ejemplo: Nombre Empresa" required autofocus>

                                    @if ($errors->has('nombreEmpresa'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nombreEmpresa') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group col-md-3 ">
                                    <label for="nombreEmpresa">Si no se encuentra:</label>
                                    <a href="{{ route('agregar-organizaciones') }}" class="btn btn-success">Agregar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-row" >
                                <div class="form-group col-md-7  {{ $errors->has('tipoConvenio') ? ' has-error' : '' }}">
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

                                <div class="form-group col-md-5 {{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
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
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('duracion') ? ' has-error' : '' }}">
                                <label for="duracion">Duracion Convenio</label>
                                <input type="Fecha" class="form-control" id="duracion" name="duracion"
                                       placeholder="Ejemplo: 2 años" required autofocus>
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