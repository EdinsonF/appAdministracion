@extends('layouts.admi')

@section('contenido')

  @include('Admin.Persona.Modals.editPersona')

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
                                            Bienvenido al Modulo de Registro Personas, aqui se llevara el control del pesonal que tendra acceso al Sistema dependiendo del rol que le sea asignado.
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
                        <div class="form-cont">
                            <div class="box-titulo">
                                <span> Registrar Persona</span>
                            </div>
                            <div class="body-form">
                                <form role="form">
                                      <div class="box-body">
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
                                              <label>E-Mail</label>
                                              <input type="text" class="form-control" id="e-mail" placeholder="E-Mail" autocomplete="off">
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
                        </div><!-- /.Formulario-->
                    
                        <!--Listado de Registros-->
                        <div class="form-list">
                            <div class="box-titulo">
                                <span> Listado Persona</span>
                            </div>
                            <div class="body-list">
                                <table class="table table-bordered">
                                    <tr>
                                      <th style="width: 10px">#</th>
                                      <th>Cédula</th>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th style="width: 20px">Opción</th>
                                    </tr>
                                    <tr>
                                      <td>1.</td>
                                      <td>cedula</td>
                                      <td>nombre</td>
                                      <td>apellido</td>
                                      <td><a class="btn btn-app" id="llamar-modal">
                                            <i class="fa fa-edit"></i>
                                          </a>
                                      </td>
                                    </tr>    
                                    
                                </table>
                                <div class="box-footer clearfix">
                                  <ul class="pagination pagination-sm no-margin pull-right">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                  </ul>
                                </div>
                            </div>
                        </div><!-- /.listado-->
                    </div> <!-- /.el cuerpo-->
                </div><!--  /.Div de la tab-->
  
              <div class="tab-pane" id="tab_Usuario">
                    <!-- Contenido-->
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
@endsection