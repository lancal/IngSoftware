@extends('plantillaGeneral')


@section('tittle')
    <title>Registrar Convenios de Colaboración</title>

@endsection

@section('form')
</br>
    <div class="container">
        <div class="card">
            <h4 class="card-header"> Registrar Convenios de Colaboración</h4>
            <div class="card-body">
                <div class="container">
                    <form action="{{ route('convenios') }}" method="POST" role="form">
                        {{ csrf_field() }}


                        @if(count($errors)>0)
                            <div class="'alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }}</li>
@endforeach
                                </ul>
                            </div>
@endif


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre Empresa u Organización</label>
                                <input class="form-control" name="nombre"
                                       placeholder="Ejemplo: Nombre Empresa" value="{{old('nombre') }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo Convenio</label>
                                <select class="form-control" name="tipoConvenio" value="{{old('tipoCOnvenio') }}">
                                    <option>Capstone</option>
                                    <option>Marco</option>
                                    <option>Específico</option>
                                    <option>A+S</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Fecha Inicio Convenio</label>
                                <input type="Fecha" class="form-control" id="fechaInicio"
                                       placeholder="Ejemplo: 2000-12-01">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Duracion Convenio (Meses)</label>
                                <input type="Fecha" class="form-control" name="duracion"
                                       placeholder="Ejemplo: 2">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf) del Texto con Firmas del
                                    Convenio</label>
                                <input type="file" class="form-control-file" id="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
