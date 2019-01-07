@extends('plantillaGeneral')



@section('tittle')
    <title>Registrar Actividad de Extensión</title>

@endsection
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@section('form')
</br>

<div class="container ">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
    </br>
</div>

<div class="container col-md-6 ">
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
                                   placeholder="Ejemplo: Titulación" required autofocus>

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

                    <hr>
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">

                            <label for="rut"> Nombre Estudiante (*) </label>
                            <input class="form-control" id="nombre" name="nombre"
                                   placeholder="Ejemplo: Luis Hernandez" required autofocus >

                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('rut') ? ' has-error' : '' }}">

                            <label for="rut"> R.U.T (*) </label>
                            <input class="form-control" id="rut" name="rut"
                                   placeholder="Ejemplo: 112335489-k" required autofocus >

                            @if ($errors->has('rut'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('carrera') ? ' has-error' : '' }}">

                            <label for="carrera">Carrera (*)</label>
                            <select class="form-control" id="carrera" name="carrera" required autofocua>
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
                            <input class="form-control" id="nombreProfesorGuia" name="nombreProfesorGuia"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ejemplo: Victor Paredes">

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
                            <input class="form-control" id="nombreEmpresa" name="nombreEmpresa"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ejemplo: Empresa S.A">

                            @if ($errors->has('nombreEmpresa'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombreEmpresa') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>




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
    <script language="JavaScript">
        //Creacion de Variable incremental
        var incremento = 0;

        //Lo que se hará cuando se presione el boton de Agregar
        function agregar(obj)
        {

            incremento++;


            //Obteniendo el Div "productos"
            bloque = document.getElementById('productos');

//Creando el Select que irá dentro del Div "productos"
            elemento = document.createElement('select');
            elemento.setAttribute("class", "custom-select custom-select-sm-1 mb-3" );
            elemento.id = 'select'+incremento;
            bloque.appendChild(elemento);


            //Llenando el arreglo que contendrá los "Options" de nuestro "Select"
            var options = [
                "Camisa",
                "Sueter",
                "Jeans",
                "Sudadera",
                "Zapatos"
            ];


            //Agregando nuestros "Options" a nuestro "Select"
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.value = options[i];
                option.text = options[i];
                elemento.appendChild(option);
            }
        }


        //Lo que se hará cuando se presione el boton de Borrar
        function borrar(obj) {
            incremento = incremento - 1;
            bloque = document.getElementById('productos');
            bloque.removeChild(bloque.lastChild);
        }
    </script>

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
