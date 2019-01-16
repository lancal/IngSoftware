@extends('layouts.dashboard')
@section('page_heading','Registrar Titulados')

@section('section')
</br>

<div class="container ">
    <a href="{{ route('titulado') }}" class="btn btn-outline-secondary"> Volver Atrás</a>

    </br>
</div>

<div class="container col-md-5 ">
    <div class="card ">
        <h4 class="card-header">Registrar Titulados</h4>
        <div class="card-body">
            <div class="container">
                <form name="form"  onsubmit="return Valida_Rut(form.rut)" method="POST" action="{{ route('registrar-titulados') }}" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">

                            <label for="nombre">Nombre Titulado (*)</label>

                            <input class="form-control" id="nombre" name="nombre"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ingrese Nombre del Estudiante" required autofocus>

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
                                   placeholder="Ingrese RUT del Estudiante" required autofocus >

                            @if ($errors->has('rut'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('anioTitulacion') ? ' has-error' : '' }}">

                            <label for="anioTitulacion">Año Titulación (*)</label>
                            <select class="form-control" id="anioTitulacion" name="anioTitulacion" required autofocus>
                                <option value="">Elija una opción</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>

                            </select>
                            @if ($errors->has('anioTitulacion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('anioTitulacion') }}</strong>
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

                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">

                            <label for="telefono">Telefono</label>
                            <div class="form-row">

                                <div class="col-md-2">
                                    <font size="3" >+569</font>
                                </div>
                                <div class="col-md-10">
                                    <input class="form-control" id="telefono" name="telefono"
                                           pattern="([1-9])[0-9]{7}"
                                           placeholder="Ejemplo: 12345678">

                                    @if ($errors->has('telefono'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">

                            <label for="correo">Correo Electrónico</label>


                            <input id="email" type="email" class="form-control"
                                   pattern="^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$"
                                   name="email" value="{{ old('email') }}" placeholder="Ingrese Correo Electrónico del Estudiante">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>




                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('nombreEmpresa') ? ' has-error' : '' }}">

                            <label for="nombreEmpresa">Nombre Empresa</label>
                            <input class="form-control" id="nombreEmpresa" name="nombreEmpresa"
                                   pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" placeholder="Ingrese Nombre de la Empresa">

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
</div>
</br></br>
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
            Objeto.focus()
            return true;
        }
    }
</script>
