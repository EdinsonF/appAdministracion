<!--Modal-->
            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modalUserRegistrar" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="mod-cabecera">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class=" mod-titulo" id="gridSystemModalLabel">Crear Usuario</h4>
                         </div>
                         <div class="modal-body body-form">
                             <form role="form">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="nombreU"  disabled="disabled" placeholder="Nombre" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" id="apellidoU" disabled="disabled" placeholder="Apellido" autocomplete="off">
                                    </div>      
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="correo" placeholder="Correo Electrónico" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" autocomplete="off">
                                    </div>
                                </div>
                            </form>
                         </div>
                         <div class="modal-box-footer">
                            <button type="button" class="btn btn-primary" id="RegistrarUser">Registrar</button>
                           
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.Termina modal -->