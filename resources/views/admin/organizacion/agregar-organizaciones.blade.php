@extends('layouts.dashboard')
@section('page_heading','Registrar Organizaciones o Empresas')

    @section('section')</br>
    <div class="container ">
        <a href="{{ route('organizacion') }}" class="btn btn-outline-secondary"> Volver Atrás</a>
        </br>
    </div>

    <div class="container col-md-5">
        <div class="card">
            <h4 class="card-header"> Registrar Organizaciones o Empresas</h4>
            <div class="card-body">
                <div class="container">
                    <form name="form" onsubmit="return Valida_Rut(form.rut)" action="{{ route('agregar-organizaciones') }}" method="POST" role="form" autocomplete="off">
                        {{ csrf_field() }}



                        <div class="col-md-12">
                            <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre">Nombre Empresa u Organización (*)</label>
                                <input class="form-control" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ]+[A-Za-zñÑáéíóúÁÉÍÓÚ\s]*"
                                       placeholder="Ingrese Nombre de la Empresa o Organización" required autofocus>
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
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
                            <div class="form-group {{ $errors->has('rut') ? ' has-error' : '' }}">
                                <label for="rut">R.U.T Empresa</label>
                                <input S class="form-control" name="rut" required autofocus
                                       placeholder="Ingrese RUT de la Empresa">
                                @if ($errors->has('rut'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rut') }}</strong>
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
            //alert('Agregado Correctamente.')
            Objeto.focus()
            return true;
        }
    }
</script>
