<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin.App | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  {{ Html::style('complementos/bootstrap/css/bootstrap.min.css') }}
  {{ Html::style('complementos/dist/css/AdminLTE.min.css') }}
  {{ Html::style('complementos/dist/css/skins/skin-blue.min.css') }}
  {{ Html::style('complementos/plugins/alertify/css/alertify.css') }}
  {{ Html::style('complementos/plugins/alertify/css/alertify.css') }}
  {{ Html::script('complementos/plugins/alertify/js/alertify.js') }}
  
</head>


<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/admin') }}" class="logo">
          <span class="logo-lg"><b>Menú</b></span>
        </a>
        <!-- menu horizontal en la parte superior -->
        <nav class="navbar navbar-static-top">
             <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
             </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Menu de Mensajes-->
                     
                    <!-- Usuario menu -->
                    <li class="dropdown user user-menu">
                        <a href="{{ url('/usuario/perfil') }}" >
                            <img src="{{ url('complementos/dist/img/LogoUser.png') }}" class="user-image" alt="User Image">
                            <!-- Imagen -->
                            <span class="hidden-xs">Nombre</span>
                            <!-- Nombre -->
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-power-off"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
      </header>


      <!-- menu vertical. contenedor del logo -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
            <div class="user-header">
               <br>
                <center>
                  <a href="{{ url('/usuario/perfil') }}" >
                    <img src="{{ url('complementos/dist/img/LogoUser.png') }}" class="img-thumbnail" alt="User Image">
                  </a>
                </center>
              </div>
              <br>
          </div>
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Personas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/persona') }}"><i class="fa fa-caret-right"></i> Personas</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Usuarios</a></li>
                
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Productos</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-caret-right"></i> Nuevo</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Vendidos</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Defectuosos</a></li>
                
              </ul>
            </li>

            
            
            <li><a href="{{ url('complementos/documentation/index.html') }}"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>




      <!-- Inicio Div Contenedor del body -->
      <div class="content-wrapper">
        
          @yield('contenido')
        
      </div> 
      <!-- /.contenedor -->

      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>By Edinson F. Jesus O. Samuel E. Helis M. Nanatael P. </b> 
        </div>
        <strong>Sistema para el control de inventarios ™...</strong> 
      </footer>
    </div>

    <!-- jQuery 2.2.0 -->
    
    {{ Html::script('complementos/plugins/jQuery/jQuery-2.2.0.min.js') }}
    {{ Html::script('complementos/bootstrap/js/bootstrap.min.js') }}
    {{ Html::script('complementos/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}
    {{ Html::script('complementos/plugins/fastclick/fastclick.js') }}
    {{ Html::script('complementos/dist/js/app.min.js') }}


    @section('script')
    @show

</body>
</html>