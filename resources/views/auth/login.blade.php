@extends ('layouts.plane')

    @section('body')
    </br>
    <div class="container">

        <div class="row">

        {{--<div class="card">--}}

            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                 <h4 class="card-header">Ingresar</h4>

                    {{--@section ('login_panel_title','Ingresar')--}}
                    {{--@section ('login_panel_body')--}}

                    <div class="card-body">

                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-12 control-label">Correo Electrónico</label>

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-12 control-label">Contraseña</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Ingresar
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            ¿Olvidó la contraseña?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </div>

@stop













{{--@extends ('layouts.plane')--}}
{{--@section ('body')--}}
    {{--</br>--}}
    {{--<div class="container col-md-3">--}}

                {{--<div class="card">--}}

    {{--<div class="container">--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-4 col-md-offset-4">--}}
            {{--<br /><br /><br />--}}
                {{--@section ('login_panel_title','Ingresar')--}}
                {{--@section ('login_panel_body')--}}
                    {{--<h4 class="card-header">Ingresar</h4>--}}
                    {{--<div class="card-body">--}}
                        {{--<div class="panel panel-default">--}}
                            {{--<div class="panel-heading"></div>--}}

                            {{--<div class="panel-body">--}}

                                {{--<form role="form">--}}
                                    {{--<fieldset>--}}
                                {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                                    {{--{{ csrf_field() }}--}}

                                    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                        {{--<label for="email" class="col-md-12 control-label">Correo Electrónico</label>--}}

                                        {{--<div class="col-md-12">--}}
                                            {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                            {{--@if ($errors->has('email'))--}}
                                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                        {{--<label for="password" class="col-md-12 control-label">Contraseña</label>--}}

                                        {{--<div class="col-md-12">--}}
                                            {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                            {{--@if ($errors->has('password'))--}}
                                                {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<div class="col-md-12 col-md-offset-4">--}}
                                            {{--<div class="checkbox">--}}
                                                {{--<label>--}}
                                                    {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme--}}
                                                {{--</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="text-center">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="col-md-12 col-md-offset-4">--}}
                                            {{--<button type="submit" class="btn btn-primary">--}}
                                                {{--Ingresar--}}
                                            {{--</button>--}}

                                            {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                                {{--¿Olvidó la contraseña?--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                    {{--</fieldset>--}}
                                {{--</form>--}}

                {{--@endsection--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}

{{--@stop--}}

{{--@extends ('layouts.plane')--}}
{{--@section ('body')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 col-md-offset-4">--}}
                {{--<br /><br /><br />--}}
                {{--@section ('login_panel_title','Please Sign In')--}}
                {{--@section ('login_panel_body')--}}
                    {{--<form role="form">--}}
                        {{--<fieldset>--}}
                            {{--<div class="form-group">--}}
                                {{--<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<input class="form-control" placeholder="Password" name="password" type="password" value="">--}}
                            {{--</div>--}}
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input name="remember" type="checkbox" value="Remember Me">Recordarme--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<!-- Change this to a button or input when using this as a form -->--}}
                            {{--<a href="{{ url ('password.request') }}" class="btn btn-lg btn-success btn-block">Ingrear</a>--}}
                        {{--</fieldset>--}}
                    {{--</form>--}}

                {{--@endsection--}}
                {{--@include('widgets.panel', array('as'=>'login', 'header'=>true))--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@stop--}}