
<div class="collapse" id="collapseAcceder">
                        <div class="well" style="margin-top:205px;padding-top: 40px; color:#fff; background:transparent !important">
                            <div class="panel panel-default" style="background-color:rgba(71,152,185,0.3);">
                                <div class="panel-heading"  style="background-color:rgba(71,152,185,0.1);color:#fff;">Iniciar sesión</div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            


                                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <label for="email" class="col-md-4 control-label">E-Mail</label>

                                                        <div class="col-md-6">
                                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                                            @if ($errors->has('email'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('email') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                        <label for="password" class="col-md-4 control-label">Contraseña</label>

                                                        <div class="col-md-6">
                                                            <input id="password" type="password" class="form-control" name="password" required>

                                                            @if ($errors->has('password'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('password') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            {{--<div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                                </label>
                                                            </div>--}}
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-4">
                                                            <button type="submit" class="btn btn-primary">
                                                                Acceder
                                                            </button>

                                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                                                ¿Olvide mi contraseña? 
                                                            </a>
                                                        </div>
                                                    </div>
                                        </form>
                    
                                    </div>
                                </div>
                        </div>
</div>




