@extends('plantillaGeneral')



@section('tittle')
    <title>Registrar Actividad Titulación por Convenio</title>

@endsection

@section('form')
</br>

<div class="container ">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
    </br>
</div>

<div class="container col-md-7 ">
    <div class="card ">
        <h4 class="card-header">Registrar Actividad Titulación por Convenio</h4>
        <div class="card-body">
            <div class="container">
                <form name="form"  onsubmit="return Valida_Rut(form.rut)" method="POST" action="/registrar-titulacion-convenio" autocomplete="off">
                    {{ csrf_field() }}

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">

                            <label for="titulo">Titulo Actividad(*)</label>

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
                            <textarea class="form-control" id="descripcion" name="descripcion"
                                      maxlength="200" rows="3" placeholder="Ingrese Descripción de la Actividad" required autofocus></textarea>


                            @if ($errors->has('descripcion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="form-row" >
                            <div class="col-md-11">

                                <input class="btn btn-secondary" type="submit" value="Agregar Estudiante" onClick="addRow('dataTable')" />
                                <input class="btn btn-secondary" type="button" value="Eliminar Estudiante" onClick="removeSampleRow('dataTable')" />
                                <label>&nbsp;&nbsp;&nbsp;Puede agregar hasta 4 Estudiantes. </label>  </div> </div><br>
                        <div class="form-row" >
                            <div class="col-md-0.5">
                                <label >&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            </div>
                            <div class="col-md-3">
                                <label for="rut">Nombre Estudiante (*) </label>
                            </div>

                            <div class="col-md-3">
                                <label for="rut"> R.U.T (*) </label>
                            </div>

                            <div class="col-md-4">
                                <label for="carrera">Carrera (*)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 " id="alumnos">
                        <div class="form-row" >
                            <table id="dataTable" class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td><input class="form-check-input"type="checkbox" name="chk[]"/></td>
                                    <td>

                                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">

                                            <input class="form-control" id="nombre" name="nombre[]" value="nombre"
                                                   placeholder="Ingrese Nombre del Estudiante" required autofocus >

                                            @if ($errors->has('nombre'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                    </td>
                                    <td>

                                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">


                                            <input class="form-control" id="rut" name="rut[]" value="rut"
                                                   placeholder="Ingrese RUT del Estudiante" required autofocus >

                                            @if ($errors->has('rut'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                            @endif

                                        </div>

                                    </td>
                                    <td>

                                        <div class="form-group {{ $errors->has('carrera') ? ' has-error' : '' }}">
                                            <select class="form-control" id="carrera" name="carrera[]"  required autofocua>
                                                <option value="">Elija una opción</option>
                                                <option>Ingeniería Civil en Computación e Informatica</option>
                                                <option>Ingeniería de Ejecución en Computación e Informatica</option>
                                                <option>Ingeniería en Computación e Informatica</option>
                                            </select>

                                            @if ($errors->has('carrera'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('carrera') }}</strong>
                                    </span>
                                            @endif
                                        </div>

                                    </td>

                                </tr>
                                </tbody>
                            </table>



                        </div>
                    </div>


                    <hr>
                    <div class="col-md-12">
                        <div class="form-row" >
                            <div class="form-group col-md-5 {{ $errors->has('fechaInicio') ? ' has-error' : '' }}">
                                <label for="fechaInicio">Fecha Inicio (*)</label>
                                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio"
                                       required autofocus>


                                @if ($errors->has('fechaInicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechaInicio') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-5 {{ $errors->has('fechaTermino') ? ' has-error' : '' }}">
                                <label for="fechaTermino">Fecha Termino </label>
                                <input type="date" class="form-control" id="fechaTermino" name="fechaTermino"
                                       autofocus>


                                @if ($errors->has('fechaTermino'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fechaTermino') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                    </div>

                    <hr>

                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('nombreProfesorGuia') ? ' has-error' : '' }}">

                            <label for="nombreProfesorGuia">Nombre Profesor Guia</label>
                            <!--input class="form-control" id="nombreProfesorGuia" name="nombreProfesorGuia"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ingrese Nombre del Profesor Guía"-->
                            <select class="form-control" name="profesor_rut" id="profesor_rut"
                                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                    placeholder="Ingrese Nombre del profesor" required autofocus>
                                <option value="">Elija una opción</option>

                                @foreach($academicos as $tipo)
                                    <option value="{{$tipo->rut}}">{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('nombreProfesorGuia'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombreProfesorGuia') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('nombreEmpresa') ? ' has-error' : '' }}">

                            <label for="nombreEmpresa">Nombre Empresa</label>

                            <select class="form-control" name="organizacion_rut" id="organizacion_rut"
                                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                    placeholder="Ingrese Nombre del Profesor" required autofocus>
                                <option value="">Elija una opción</option>

                                @foreach($org as $tipo)
                                    <option value="{{$tipo->rut}}">{{$tipo->nombre}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('nombreEmpresa'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombreEmpresa') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

<!--$table->date('fecha_inicio');
            $table->date('fecha_termino')->nullable();
            $table->string('lugar',255);
            $table->unsignedInteger('actividad_id')->primary();

            $table->unsignedInteger('convenio_id');
                $table->text('descripcion');
                $table->string('titulo', 255);
                $table->unsignedInteger('cantidad_asistentes');
            -->


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
    @endsection

    <script>
        function Valida_Rut( Objeto )
        {
            var tmpstr = "";
            var intlargo = Objeto.value
            if (intlargo.length> 0)
            {
                crut = Objeto.value
                largo = crut.length;
                if ( largo <2 )
                {
                    alert('rut inválido')
                    Objeto.focus()
                    return false;
                }
                for ( i=0; i <crut.length ; i++ )
                    if ( crut.charAt(i) != ' ' && crut.charAt(i) != '.' && crut.charAt(i) != ',' && crut.charAt(i) != '-' )
                    {
                        tmpstr = tmpstr + crut.charAt(i);
                    }
                rut = tmpstr;
                crut=tmpstr;
                largo = crut.length;

                if ( largo> 2 )
                    rut = crut.substring(0, largo - 1);
                else
                    rut = crut.charAt(0);

                dv = crut.charAt(largo-1);

                if ( rut == null || dv == null )
                    return 0;

                var dvr = '0';
                suma = 0;
                mul  = 2;

                for (i= rut.length-1 ; i>= 0; i--)
                {
                    suma = suma + rut.charAt(i) * mul;
                    if (mul == 7)
                        mul = 2;
                    else
                        mul++;
                }

                res = suma % 11;
                if (res==1)
                    dvr = 'k';
                else if (res==0)
                    dvr = '0';
                else
                {
                    dvi = 11-res;
                    dvr = dvi + "";
                }

                if ( dvr != dv.toLowerCase() )
                {
                    alert('El Rut Ingreso es Invalido')
                    Objeto.focus()
                    return false;
                }
                alert('El Rut Ingresado es Correcto!')
                Objeto.focus()
                return true;
            }
        }
    </script>


    <script>
        function addRow(tableID) {
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
                    alert("Seleccione el Estudiante que desea eliminar.");
                }
            }else{
                /*** Alert user if there are no rows being added ***/
                alert("Debe Agregar al menos 1 Estudiante.");
            }
        }</script>
