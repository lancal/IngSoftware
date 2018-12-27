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
                    <form>
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nombre Empresa u Organización</label>
                                <input class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: Nombre Empresa">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Tipo Convenio</label>
                                <select class="form-control" id="exampleFormControlSelect1">
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
                                <input type="Fecha" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: 31/12/2000">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Duracion Convenio</label>
                                <input type="Fecha" class="form-control" id="exampleFormControlInput1"
                                       placeholder="Ejemplo: 2 años">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf) del Texto con Firmas del
                                    Convenio</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
