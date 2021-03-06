@extends('plantillaGeneral')

@section('tittle')
    <title>Inicio</title>

@endsection

@section('contenido')
    <div class="container">
        </br>
        <h3>Sistema de Gestión Vinculación DISC UCN</h3>
        <hr>

        <h4>Menu Principal</h4>
        </br>
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Indicadores</h5>
                        <p class="card-text"></p>

                        <a href="#" class="btn btn-primary disabled" aria-disabled="true">Ver Listado</a>
                    </div>
                </div>
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
        </div>

        </br>
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Convenios de Colaboración</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('convenios') }}" class="btn btn-primary">Registrar</a>
                        <a href="{{ route('listarConvenios')}}" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad de Extensión</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('actividad-extension') }}" class="btn btn-primary">Registrar</a>
                        <a href="{{ route('listarActividadesExtension') }}" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
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

        </div>
        </br>

        </br>
        <div class="row">
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
        </div>

    </div>
@endsection