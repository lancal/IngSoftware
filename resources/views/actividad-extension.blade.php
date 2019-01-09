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
                            <textarea class="form-control" id="descripcion" name="descripcion" maxlength="200" rows="3"  placeholder="Ingrese Descripción de la Actividad" required autofocus></textarea>


                            @if ($errors->has('descripcion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <hr>
                    <div class="col-md-12 ">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label>&nbsp;Puede agregar hasta 4 Expositores. </label>
                                <input class="btn btn-secondary" type="button" value="Agregar"
                                       onClick="addRow('dataTable1')"/>
                                <input class="btn btn-secondary" type="button" value="Eliminar"
                                       onClick="removeSampleRow('dataTable1')"/>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-0.5">
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            </div>
                            <div class="col-md-5">
                                <label for="nombreExpositor">Nombre Expositor o Relator</label>
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
                                        <div class="form-group {{ $errors->has('nombreExpositor') ? ' has-error' : '' }}">
                                            <input class="form-control" id="nombreExpositor" name="nombreExpositor"
                                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                                   placeholder="Ejemplo: Ingrese Nombre Expositor o Relator" required>

                                            @if ($errors->has('nombreExpositor'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('nombreExpositor') }}</strong>
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
                    <div class="col-md-12 ">
                        <div class="form-row">
                            <div class="col-md-12">
                                <label>&nbsp;Puede agregar hasta 4 Academicos Organizadores. </label>
                                <input class="btn btn-secondary" type="button" value="Agregar"
                                       onClick="addRow('dataTable')"/>
                                <input class="btn btn-secondary" type="button" value="Eliminar"
                                       onClick="removeSampleRow('dataTable')"/>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-0.5">
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            </div>
                            <div class="col-md-5">
                                <label for="organizador">Organizador Actividad</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">


                        <table id="dataTable" class="table table-borderless">


                            <tbody>
                            <tr>
                                <td><input class="form-check-input" type="checkbox" name="chk[]"/></td>
                                <td>

                                    <div class="col-md-12">
                                        <div class="form-group {{ $errors->has('organizador') ? ' has-error' : '' }}">


                                            <input class="form-control" id="exampleFormControlInput1" name="organizador"
                                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                                   placeholder="Ingrese Organizador de la Actividad" required autofocus>
                                        </div>
                                    </div>
                                </td>


                            </tr>
                            </tbody>
                        </table>


                    </div>
                    <hr>

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
                                   placeholder="Ingrese Lugar de la Actividad" required autofocus>

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

<script>function addRow(tableID) {
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
            alert("Numero Máximo de Estudiantes es 4.");

        }
    }

    function removeSampleRow(id) {
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


                if(id == "dataTable"){alert("Seleccione el Academico Organizador que desea eliminar.");
                }
                if(id == "dataTable1"){alert("Seleccione el Expositor o Relator que desea eliminar.");}

            }
        }else{
            /*** Alert user if there are no rows being added ***/

            if(id == "dataTable"){ alert("Debe Agregar al menos 1 Academico Organizador.");;
            }else if(id == "dataTable1"){alert("Debe Agregar al menos 1 Expositor o Relator.");}
        }
    }</script>