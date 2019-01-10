@extends('plantillaGeneral')

@section('tittle')
    <title>Registrar Actividad Aprendizaje + Servicio</title>
    @endsection
    @section('form')
    </br>
    <div class="container ">
        <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>

    <div class="container  col-md-6">
        <div class="card">
            <h4 class="card-header">Registrar Actividad Aprendizaje + Servicio</h4>
            <div class="card-body">
                <div class="container">
                    <form name="form"  action="{{ route('actividad-aprendizaje-servicio') }}" method="POST" role="form" autocomplete="off">
                        {{ csrf_field() }}




                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">

                                <label for="titulo">Título Actividad (*)</label>

                                <input class="form-control" id="titulo" name="titulo"
                                       pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*[0-9]*"
                                       placeholder="Ingrese Título de la Actividad" required autofocus>

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
                                <textarea class="form-control" id="descripcion" name="descripcion" maxlength="200" rows="3"  placeholder="Ingrese Descripción de la Actividad"required autofocus></textarea>


                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group" {{ $errors->has('asignatura') ? ' has-error' : '' }}>

                                <label for="asignatura">Asignatura</label>
                                <input class="form-control" id="asignatura"
                                       pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                       placeholder="Ingrese Asignatura" required autofocus>
                                @if ($errors->has('asignatura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('asignatura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>
                        <div class="col-md-5">
                            <div class="form-group" {{ $errors->has('cantidad') ? ' has-error' : '' }}>

                                <label for="cantidad">Cantidad Estudiantes</label>
                                <select class="form-control" id="cantidad" name="cantidad" required autofocus>
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
                                    <option>31</option>
                                    <option>32</option>
                                    <option>33</option>
                                    <option>34</option>
                                    <option>35</option>
                                    <option>36</option>
                                    <option>37</option>
                                    <option>38</option>
                                    <option>39</option>
                                    <option>40</option>
                                </select>

                                @if ($errors->has('cantidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12 ">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label>Puede agregar hasta 4 Profesores. </label>
                                    <input class="btn btn-secondary" type="button" value="Agregar"
                                           onClick="addRow('dataTable','profesor')"/>
                                    <input class="btn btn-secondary" type="button" value="Eliminar"
                                           onClick="removeSampleRow('dataTable','profesor')"/>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-0.5">
                                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                </div>
                                <div class="col-md-5">
                                    <label for="rut">Nombre Profesor (*) </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">


                            <table id="dataTable" class="table table-borderless">


                                <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" name="chk[]"/></td>
                                    <td>

                                        <div class="form-group" {{ $errors->has('nombreProfesor') ? ' has-error' : '' }}>
                                            <input class="form-control" id="nombreProfesor" name="nombreProfesor"
                                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                                   placeholder="Ingrese Nombre del Profesor" required autofocus>

                                            @if ($errors->has('nombreProfesor'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('nombreProfesor') }}</strong>
                                    </span>
                                            @endif

                                        </div>
                                    </td>


                                </tr>
                                </tbody>
                            </table>


                        </div>

                        <hr>
                        <div class="col-md-12 ">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <label>&nbsp;Puede agregar hasta 4 Socios Comunitarios. </label>
                                    <input class="btn btn-secondary" type="button" value="Agregar"
                                           onClick="addRow('dataTable1','socio')"/>
                                    <input class="btn btn-secondary" type="button" value="Eliminar"
                                           onClick="removeSampleRow('dataTable1','socio')"/>

                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-0.5">
                                    <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                </div>
                                <div class="col-md-5">
                                    <label for="nombreSocioComunitario">Nombre Socio Comunitario</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">


                            <table id="dataTable1" class="table table-borderless">


                                <tbody>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" name="chk[]"/></td>
                                    <td>

                                        <div class="col-md-12">
                                            <div class="form-group" {{ $errors->has('nombreSocioComunitario') ? ' has-error' : '' }}>


                                                <input class="form-control" id="nombreSocioComunitario" name="nombreSocioComunitario"
                                                       pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ingrese Nombre del Socio Comunitario"
                                                       required autofocus>
                                                @if ($errors->has('nombreSocioComunitario'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombreSocioComunitario') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                        </div>
                                    </td>


                                </tr>
                                </tbody>
                            </table>


                        </div>

                        <hr>
                        <div class="col-md-12">
                            <div class="form-row">
                                <div class="form-group col-md-5" {{ $errors->has('semestre') ? ' has-error' : '' }}>
                                    <label for="semestre">Semestre</label>

                                    <select class="form-control" id="semestre" name="semestre" required autofocus>
                                        <option value="">Elija una opción</option>
                                        <option>Primer Semestre</option>
                                        <option>Segundo Semestre</option>
                                    </select>
                                    @if ($errors->has('semestre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('semestre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-5" {{ $errors->has('anio') ? ' has-error' : '' }}>
                                    <label for="anio">Año</label>

                                    <select class="form-control" id="anio" name="anio" required autofocus>
                                        <option value="">Elija una opción</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>

                                    </select>
                                    @if ($errors->has('anio'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('anio') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Evidencia: Archivo (.pdf) Acuerdo Firmado por
                                    Profesor Asignatura y Representante Socio Comunitario</label>
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
                </div>
                <hr>
            </div>
        </div>
    </div>
    </div>
    </br></br>
@endsection



<script>function addRow(tableID,$tipo) {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;
        if(rowCount < 4){							// limit the user from creating fields more than your limits
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            }
        }else{
            if($tipo=='socio'){
                alert("Numero Máximo de Socios Comunitarios es 4.");
            }else{
                alert("Numero Máximo de Estudiantes es 4.");
            }

        }
    }

    function removeSampleRow(id,$tipo) {
        /***We get the table object based on given id ***/
        var objTable = document.getElementById(id);

        /*** Get the current row length ***/
        var iRow = objTable.rows.length;

        /*** Initial row counter ***/
        var counter = 0;

        /*** Performing a loop inside the table ***/
        if (objTable.rows.length > 1) {
            for (var i = 0; i < objTable.rows.length; i++) {

                /*** Get checkbox object ***/
                var chk = objTable.rows[i].cells[0].childNodes[0];
                if (chk.checked&& (iRow-1)>0) {
                    /*** if checked we del ***/
                    objTable.deleteRow(i);
                    iRow--;
                    i--;
                    counter = counter + 1;
                }
            }

            /*** Alert user if there is now row is selected to be deleted ***/
            if (counter == 0) {
                if($tipo=='socio'){
                    alert("Seleccione el Socio Comunitario que desea eliminar.");
                }else{
                    alert("Seleccione el Estudiante que desea eliminar.");
                }
            }
        }else{
            /*** Alert user if there are no rows being added ***/
            if($tipo=='socio'){
                alert("Debe Agregar al menos 1 Socio Comunitario.");
            }else{
                alert("Debe Agregar al menos 1 Estudiante.");
            }
        }
    }</script>