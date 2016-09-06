@extends('layouts.admi')

@section('contenido')

  @include('Admin.Modals.editPersona')
  @include('Admin.Modals.registrarUser')
  @include('Admin.Modals.editUser')
  @include('Msj.successJS')
  @include('Msj.errorJS')


	<section class="content">
      <!-- Main row -->
      <div class="row"> <!--Columan Contenedora del  Cuerpo-->

        <div class="col-xs-12">
          <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Personas</a></li>
                  <li><a href="#tab_Usuario" data-toggle="tab">Usuarios</a></li>
                  <li><a href="#tab_Proveedor" data-toggle="tab">Provedores</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="cuerpo">
                            <div class="box-body chat" id="chat-box">
                                  <div class="item">
                                        <img src="{{ url('complementos/dist/img/LogoUser.png') }}" alt="user image">
                                        <p class="message">
                                            <a class="name">
                                                Gestión de Personas
                                            </a>
                                                Bienvenido al Modulo de Registro Personas, aqui se llevara el control de las Personas, sean USUARIOS, CLIENTES Ó PROVEEDORES .
                                            <code>
                                                Todo los Campos del Formulario deben ser llenados
                                            </code>
                                        </p>
                                  </div>
                            </div>

                            <div class="box-footer">
                                <a class="form-registrar">Registra Persona</a>
                                <span>  /  </span>
                                <a class="form-listado">Listado de Personas</a>
                            </div>
                            <!--Formulario-->
                            <div class="formularioCont">
                              <div class="form-cont">
                                  <div class="box-titulo">
                                      <span> Registrar Persona</span>
                                  </div>
                                  <div class="body-form">
                                      <form role="form">
                                            <div class="box-body">
                                                  <input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                                                  <input type="hidden" name="id_persona"  id="id_persona">
                                                  <div class="form-group">
                                                    <label>Cédula</label>
                                                    <input type="text" class="form-control" id="cedula" placeholder="Cedula" autocomplete="off">
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" autocomplete="off">
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Apellido</label>
                                                    <input type="text" class="form-control" id="apellido" placeholder="Apellido" autocomplete="off">
                                                  </div>                                             
                                                  <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control" id="telefono" placeholder="Telefono" autocomplete="off">
                                                  </div>
                                                  <div class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control" id="direccion" placeholder="Dirección" autocomplete="off">
                                                  </div>
                                            </div>
                                      </form>
                                      </div>
                                    <div class="box-footer">
                                         <button type="button" class="btn btn-primary" id="registrar">Registrar</button>
                                    </div>
                              </div>
                            </div><!-- /.Formulario-->
                        
                            <!--Listado de Registros-->
                            <div class="listaCont">
                              <div class="form-list">
                                @include('Admin.Slides.listaPersonas')
                              </div>
                            </div>
                            <!-- /.listado-->

                        </div> <!-- /.el cuerpo-->
                    </div><!--  /.Div de la tab-->
      
                    <div class="tab-pane" id="tab_Usuario">
                          <div class="cuerpo">
                              <div class="box-body chat" id="chat-box">
                                    <div class="item">
                                          <img src="{{ url('complementos/dist/img/LogoUser.png') }}" alt="user image">
                                          <p class="message">
                                              <a class="name">
                                                  Gestión de Usuarios
                                              </a>
                                                   Registro de usuarios, aqui se llevara el control del personal que tendra acceso al Sistema dependiendo del rol que le sea asignado.
                                              <code>
                                                  Todo los Campos del Formulario deben ser llenados
                                              </code>
                                          </p>
                                    </div>
                              </div>

                              <div class="box-footer">
                                  <a class="form-listadoP">Listado de Personas</a>
                                  <span>  /  </span>
                                  <a class="form-listadoU">Listado de Usuarios</a>
                              </div>
                              <!--listados de registros-->
                              <div class="listContPers">
                                <div class="form-list">
                                      @include('Admin.Slides.listaPersonas')  
                                </div>
                              </div>
                              <!-- /.listado-->
                              <!--Listado de Registros-->
                              <div class="listContUser">
                                <div class="form-list">
                                    
                                        @include('Admin.Slides.listaUsuarios')
                                    
                                    
                                </div>
                              </div>
                              <!-- /.listado-->
                          </div> <!-- /.el cuerpo-->
                    </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_Proveedor">
                        <!-- Contenido-->
                  </div>
                  <!-- /.tab-pane -->
                </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>  
      </div>
      <!-- /.row (main row) -->
    </section>
@endsection


@section('script')
	{!!Html::script('personaJs/form.js')!!}
  {!!Html::script('personaJs/gestionForm.js')!!}
@endsection