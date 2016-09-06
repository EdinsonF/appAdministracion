@extends('layouts.home')


@section('contenido')
	<div class="login-box">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>Administración</b>.App</a>
      </div>
      <!-- /.login-logo -->
	      <div class="login-box-body">
	        <p class="login-box-msg">Iniciar Sesión</p>

	            <form action="" method="post">
	                  <div class="form-group has-feedback">
	                    <input type="email" class="form-control" placeholder="Correo">
	                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	                  </div>

	                  <div class="form-group has-feedback">
	                    <input type="password" class="form-control" placeholder="Contraseña">
	                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	                  </div>
	                  <div class="row">
	                        <div class="col-xs-8">
	                          <div class="checkbox icheck">
	                            <label>
	                              <input type="checkbox"> Recordarme
	                            </label>
	                          </div>
	                        </div>
	                        <!-- /.col -->
	                        <div class="col-xs-4">
	                          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
	                        </div>
	                        <!-- /.col -->
	                  </div>
	            </form>

	            

	            <a href="#">Olvidó su contraseña?</a><br>
	            <a href="register.html" class="text-center">Crear mi cuenta...</a>

	       </div>
  	<!-- /.login-box-body -->
	</div>
@stop