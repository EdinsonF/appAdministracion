@extends('layouts.home')

@section('contenido')

	<div class="login-box">
      <div class="login-logo">
        <a href="{{ url('/') }}"><b>Bienvenido al Sistema</b><b> "Administración </b>.App"</a>
      </div>
      <!-- /.login-logo -->
	      <div class="login-box-body">
	        <a href="/login"><button type="" class="btn btn-primary btn-block btn-flat">Iniciar Sesion</button></a>
	       </div>
  	<!-- /.login-box-body -->
	</div>

@stop