@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Datos para registro</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">Nombre</label>
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name"
                                           value="{{ old('first_name') }}" required autofocus>

                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name_p') ? ' has-error' : '' }}">
                                <label for="last_name_p" class="col-md-4 control-label">Primer apellido</label>

                                <div class="col-md-6">
                                    <input id="last_name_p" type="text" class="form-control" name="last_name_p"
                                           value="{{ old('last_name_p') }}" required autofocus>

                                    @if ($errors->has('last_name_p'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name_p') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name_m') ? ' has-error' : '' }}">
                                <label for="last_name_m" class="col-md-4 control-label">Segundo apellido</label>

                                <div class="col-md-6">
                                    <input id="last_name_m" type="text" class="form-control" name="last_name_m"
                                           value="{{ old('last_name_m') }}" required autofocus>

                                    @if ($errors->has('last_name_m'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('last_name_m') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('UDG_Code') ? ' has-error' : '' }}">
                                <label for="UDG_Code" class="col-md-4 control-label">Código UDG</label>

                                <div class="col-md-6">
                                    <input id="UDG_Code" type="number" class="form-control" name="UDG_Code"
                                           value="{{ old('UDG_Code') }}" required>

                                    @if ($errors->has('UDG_Code'))
                                        <span class="help-block">
                                <strong>{{ $errors->first('UDG_Code') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password"
                                           required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirma tu
                                    contraseña</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('CURP') ? ' has-error' : '' }}">
                                <label for="curp" class="col-md-4 control-label">CURP</label>

                                <div class="col-md-6">
                                    <input id="curp" type="text" class="form-control" name="curp"
                                           value="{{ old('curp') }}" required>

                                    @if ($errors->has('CURP'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('CURP') }}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                                <label for="area" class="col-md-4 control-label">Área</label>

                                <div class="col-md-6">
                                    <select id="area" type="text" class="form-control" name="area"
                                           value="{{ old('area') }}" required>
                                        <option value=""> Selecciona una área </option>
                                        <option value="Medicina"> Medicina </option>
                                        <option value="SLPCE"> SLPCE </option>
                                        <option value="Nutricion"> Nutricion </option>
                                    </select>

                                    @if ($errors->has('area'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                    @endif 
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrarse
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
