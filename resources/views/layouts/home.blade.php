<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio de sesión</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="Complementos/bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="Complementos/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Complementos/plugins/iCheck/square/blue.css">

</head>


<body class="hold-transition login-page">
  @yield('contenido')

<!-- jQuery 2.2.0 -->
<script src="{{ url('Complementos/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url('Complementos/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ url('Complementos/plugins/iCheck/icheck.min.js') }}"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

</body>
</html>
