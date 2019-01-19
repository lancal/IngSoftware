@extends('layouts.dashboard')
@section('page_heading','Registrar Actividad Aprendizaje mas Servicio')

    @section('section')
    </br>
    <div class="container ">
        <a href="{{ route('actividadAprendizajeServicio') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>

    <div class="container  col-md-6">
        <div class="card">
            <h4 class="card-header">Editar Actividad Aprendizaje + Servicio</h4>
            <div class="card-body">
                <div class="container">
                    <form name="form"  action="{{ route('actividadAprendizajeServicios.update',$actividad->id) }}" method="POST" role="form" autocomplete="off">
                        {{ csrf_field() }}
                        {!! method_field('PUT') !!}

                        <div class="col-md-12">
                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">

                                <label for="titulo">Título Actividad (*)</label>

                                <input class="form-control" id="titulo" name="titulo"
                                       pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*[0-9]*"
                                       placeholder="Ingrese Título de la Actividad" required autofocus
                                       value="{{$actividad->titulo}}">

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
                                <textarea class="form-control" id="descripcion" name="descripcion" maxlength="200" rows="3"
                                required autofocus>{{$actividad->descripcion}}</textarea>


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
                                <input class="form-control" id="asignatura" name="asignatura"
                                       pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                       placeholder="Ingrese Asignatura" required autofocus
                                       value="{{$actividadAS->asignatura}}">
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
                                <input class="form-control" id="cantidad" name="cantidad"
                                       pattern="[1-9]+[0-9]*"
                                       placeholder="Ingrese cantidad asistentes" required autofocus
                                       value="{{$actividad->cantidad_asistentes}}">

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
                                <div class="col-md-11">
                                    <input class="btn btn-secondary" type="button" value="Agregar"
                                           onClick="addSampleRow('dataTable')"/>
                                    <input class="btn btn-secondary" type="button" value="Eliminar"
                                           onClick="removeSampleRow('dataTable')"/>
                                    <label>Puede agregar hasta 4 Profesores. </label>
                                </div>
                            </div></br>

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

                                        <div class="form-group" {{ $errors->has('rutProfesor') ? ' has-error' : '' }}>
                                            <!--input class="form-control" id="nombreProfesor" name="nombreProfesor"
                                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                                   placeholder="Ingrese Nombre del Profesor" required autofocus-->
                                            <select class="form-control" name="rutProfesor" id="rutProfesor"
                                                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                                    placeholder="Ingrese un Profesor" required autofocus>
                                                <option>Seleccione un profesor</option>
                                                @foreach($academic as $tipo)
                                                    <option value="{{$tipo->rut}}">{{$tipo->nombre}} |  RUT: {{$tipo->rut}}</option>
                                                @endforeach
                                            </select>


                                            @if ($errors->has('rutProfesor'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('rutProfesor') }}</strong>
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
                                <div class="col-md-11">
                                    <input class="btn btn-secondary" type="button" value="Agregar"
                                           onClick="addSampleRow('dataTable1')"/>
                                    <input class="btn btn-secondary" type="button" value="Eliminar"
                                           onClick="removeSampleRow('dataTable1')"/>
                                    <label>Puede agregar hasta 4 Socios Comunitarios. </label>
                                </div>
                            </div></br>
                        </div>
                        <div class="form-row">
                            <div class="col-md-0.5">
                                <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            </div>
                            <div class="col-md-5">
                                <label for="nombreSocioComunitario">Nombre Socio Comunitario</label>
                            </div>
                            <div class="col-md-0.5">
                                <labe>                </labe>
                            </div>
                            <div class="col-md-5">
                                <label for="archivoAdjunto">Evidencia: Archivo (.pdf)</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-12 ">
                                <table id="dataTable1" class="table table-borderless" width="100%">
                                    <tbody>
                                    <tr>
                                        <td><input class="form-check-input" type="checkbox" name="chk[]"/></td>
                                        <td >
                                            <div class="form-group" {{ $errors->has('nombreSocioComunitario1') ? ' has-error' : '' }}>

                                                <select class="form-control" id="nombreSocioComunitario1" name="nombreSocioComunitario1"
                                                        pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ingrese Nombre del Socio Comunitario"
                                                        required autofocus>
                                                    <option>Seleccione un socio comunitario</option>
                                                    @foreach($dato as $tipe)
                                                        <option value="{{$tipe->idConvenio}}">{{$tipe->nombreOrganizacion}}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('nombreSocioComunitario1'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombreSocioComunitario1') }}</strong>
                                    </span>
                                                @endif

                                            </div>

                                            <div>

                                            </div>
                                        </td>

                                        <td width="50%">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">


                                        </td>

                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <hr>
                            </br>
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



<script>
    function addSampleRow(id) {

        if (id == "dataTable") {
            var objTable = document.getElementById(id);
            var rowCount = objTable.rows.length;

            if (rowCount < 4) {
                var objRow = objTable.insertRow(objTable.rows.length);
                var objCell1 = objRow.insertCell(0);
                var objInputCheckBox = document.createElement("input");
                objInputCheckBox.type = "checkbox";
                objCell1.appendChild(objInputCheckBox);
                var objCell2 = objRow.insertCell(1);
                $academic=
                    objCell2.innerHTML = "<select class=\"form-control\" name=\"rutProfesor" +(rowCount+1) +"\" id=\"rutProfesor"+(rowCount+1)+"\"\n" +
                        "                    pattern=\"[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\\s]*\"\n" +
                        "                    placeholder=\"Ingrese un Profesor\" required autofocus>\n" +
                        "                   <option></option>\n" +
                        "                   @foreach($academic as $tipo)\n" +
                        "                       <option value=\"{{$tipo->rut}}\">{{$tipo->nombre}} |  RUT: {{$tipo->rut}}</option>\n" +
                        "                   @endforeach\n" +
                        "                   </select>\n"+
                        "                 @if ($errors->has('rutProfesor'))\n" +
                        "                     <span class=\"help-block\">\n" +
                        "                     <strong>{{ $errors->first('rutProfesor') }}</strong>\n" +
                        "                     </span>\n" +
                        "                 @endif\n" +
                        "                </div>";
                ;

            } else {
                alert("Número Máximo de Profesores es 4.");

            }
        }
        if (id == "dataTable1") {
            var objTable = document.getElementById(id);
            var rowCount = objTable.rows.length;

            if (rowCount < 4) {
                var objRow = objTable.insertRow(objTable.rows.length);
                var objCell1 = objRow.insertCell(0);
                var objInputCheckBox = document.createElement("input");
                objInputCheckBox.type = "checkbox";
                objCell1.appendChild(objInputCheckBox);
                var objCell3 =objRow.insertCell(1);
                var objCell2 = objRow.insertCell(1);

                objCell2.innerHTML = " <div class=\"form-group\" {{ $errors->has('nombreSocioComunitario') ? ' has-error' : '' }}>\n" +
                    "\n" +
                    "                                                        <select class=\"form-control\" id=\"nombreSocioComunitario"+ (rowCount+1)+"\" name=\"nombreSocioComunitario"+(rowCount+1)+"\"\n" +
                    "                                                                pattern=\"[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\\s]*\" placeholder=\"Ingrese Nombre del Socio Comunitario\"\n" +
                    "                                                                required autofocus>\n" +
                    "                                                            <option></option>\n" +
                    "                                                            @foreach($dato as $tipe)\n" +
                    "                                                                <option value=\"{{$tipe->id}}\">{{$tipe->nombreOrganizacion}}</option>\n" +
                    "                                                            @endforeach\n" +
                    "                                                        </select>\n" +
                    "                                                        @if ($errors->has('nombreSocioComunitario'))\n" +
                    "                                                            <span class=\"help-block\">\n" +
                    "                                        <strong>{{ $errors->first('nombreSocioComunitario') }}</strong>\n" +
                    "                                    </span>\n" +
                    "                                                        @endif\n" +
                    "\n" +
                    "                                                    </div>";
                ;
                objCell3.innerHTML= "<input  type=\"file\" class=\"form-control-file\" id=\"exampleFormControlFile1"+(rowCount+1)+"\">";
            } else {
                alert("Número Máximo de Socios comutarios es 4.");

            }
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
                if(id=='dataTable1'){
                    alert("Seleccione el Socio Comunitario que desea eliminar.");
                }else{
                    alert("Seleccione el Profesor que desea eliminar.");
                }
            }
        }else{
            /*** Alert user if there are no rows being added ***/
            if(id=='dataTable1'){
                alert("Debe Agregar al menos 1 Socio Comunitario.");
            }else{
                alert("Debe Agregar al menos 1 Profesor.");
            }
        }
    }</script>
