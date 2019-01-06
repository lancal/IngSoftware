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
                        <a href="{{ route('organizaciones') }}" class="btn btn-primary">Registrar</a>
                        <a href="{{ route('listar-organizaciones') }}" class="btn btn-primary">Ver Listado</a>
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
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad de Extensión</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('actividad-extension') }}" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad de Aprendizaje + Servicio</h5>
                        <p class="card-text"></p>
                        <a href="{{ route('actividad-aprendizaje-servicio') }}" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
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
                        <a href="/registrar-titulados" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actividad de Titulación por Convenio</h5>
                        <p class="card-text"></p>
                        <a href="/registrar-titulacion-convenio" class="btn btn-primary">Registrar</a>
                        <a href="#" class="btn btn-primary">Ver Listado</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection