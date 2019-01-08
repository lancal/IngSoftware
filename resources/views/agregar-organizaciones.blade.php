@extends('plantillaGeneral')

@section('tittle')
    <title>Agregar Organizaciones</title>

    @endsection
    @section('contenido')</br>
    <div class="container ">
        <a href="{{ route('convenios') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>

    <div class="container col-md-5">
        <div class="card">
            <h4 class="card-header"> Registrar Organizaciones o Empresas</h4>
            <div class="card-body">
                <div class="container">
                    <form name="form" onsubmit="return Valida_Rut(form.rutEmpresa)" action="{{ route('agregar-organizaciones') }}" method="POST" role="form" autocomplete="off">
                        {{ csrf_field() }}



                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('nombreEmpresa') ? ' has-error' : '' }}">
                                <label for="nombreEmpresa">Nombre Empresa u Organización (*)</label>
                                <input class="form-control" name="nombreEmpresa" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                       placeholder="Ingrese Nombre de la Empresa o Organización" required autofocus>
                                @if ($errors->has('nombreEmpresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombreEmpresa') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('responsable') ? ' has-error' : '' }}">
                                <label for="responsable">Responsable (*)</label>
                                <input class="form-control" name="responsable" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*" required autofocus
                                       placeholder="Ingrese Nombre del Responsable">
                                @if ($errors->has('responsable'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('responsable') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('rutEmpresa') ? ' has-error' : '' }}">
                                <label for="rutEmpresa">R.U.T Empresa</label>
                                <input S class="form-control" name="rutEmpresa" required autofocus
                                       placeholder="Ingrese RUT de la Empresa">
                                @if ($errors->has('rutEmpresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rutEmpresa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('tipoEmpresa') ? ' has-error' : '' }}">
                                <label for="tipoEmpresa">Tipo Empresa (*)</label>
                                <select class="form-control" id="tipoEmpresa" name="tipoEmpresa" required autofocus>
                                    <option value="">Elija una opción</option>
                                    <option>Empresa</option>
                                    <option>Organización</option>
                                </select>

                                @if ($errors->has('tipoEmpresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipoEmpresa') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>

                        <label for="subtituloForm">(*) Campo obligatorio.</label>
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
                alert('R.U.T Invalido, Ingrese Nuevamente.')
                Objeto.focus()
                return false;
            }
            alert('Agregado Correctamente.')
            Objeto.focus()
            return true;
        }
    }
</script>
