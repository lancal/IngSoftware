@extends('plantillaGeneral')



@section('tittle')
    <title>Registrar Actividad de Extensión</title>

@endsection

@section('form')
</br>

<div class="container ">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
    </br>
</div>

<div class="container  col-md-6">
    <div class="card">
        <h4 class="card-header"> Registrar Actividad de Extensión</h4>
        <div class="card-body">
            <div class="container">
                <form name="form" method="POST"
                      action="{{ route('actividad-extension') }}" autocomplete="off">
                    {{ csrf_field() }}

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">

                            <label for="titulo">Título Actividad (*)</label>

                            <input class="form-control" id="titulo" name="titulo"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                   placeholder="Ejemplo: Actividad Extensión" required autofocus>

                            @if ($errors->has('titulo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">


                            <label for="descripcion">Decripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" maxlength="200" rows="3" required autofocus></textarea>


                            @if ($errors->has('descripcion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('nombreExpositor') ? ' has-error' : '' }}">

                            <label for="nombreExpositor">Nombre Expositor o Relator</label>
                            <input class="form-control" id="nombreExpositor" name="nombreExpositor"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                   placeholder="Ejemplo: Juan Pérez" required>

                            @if ($errors->has('nombreExpositor'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombreExpositor') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('fecha') ? ' has-error' : '' }}">
                            <label for="fecha">Fecha Actividad</label>

                            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio"
                                   required autofocus>

                            @if ($errors->has('fecha'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('lugar') ? ' has-error' : '' }}">

                            <label for="lugar">Lugar Actividad</label>
                            <input class="form-control" id="lugar" name="lugar"
                                   placeholder="Ejemplo: K" required autofocus>

                            @if ($errors->has('lugar'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lugar') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('cantidad') ? ' has-error' : '' }}">

                            <label for="exampleFormControlInput1">Cantidad Asistentes</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="cantidad" required autofocus>
                                <option value="">Elija una opción</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                            </select>
                            @if ($errors->has('cantidad'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('organizador') ? ' has-error' : '' }}">

                            <label for="organizador">Organizador Actividad</label>
                            <input class="form-control" id="exampleFormControlInput1" name="organizador"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                   placeholder="Ejemplo: Nombre Empresa" required autofocus>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf, .jpg, .png) Lista
                                Asistencia Actividad</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Adjuntar Fotografias Actividad</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                    <hr>

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
