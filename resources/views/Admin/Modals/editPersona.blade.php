<!--Modal-->
            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id="modalPersonaEdit" >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="mod-cabecera">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class=" mod-titulo" id="gridSystemModalLabel">Modificar Registro</h4>
                         </div>
                         <div class="modal-body body-form">
                             <form role="form">
                                <div class="box-body">
                                     
                                     
                                      <div class="form-group">
                                        <label>Cédula</label>
                                        <input type="text" class="form-control" id="cedulaP" disabled="disabled" placeholder="Cedula" autocomplete="off">
                                      </div>
                                      <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="nombreP" placeholder="Nombre" autocomplete="off">
                                      </div>
                                      <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" id="apellidoP" placeholder="Apellido" autocomplete="off">
                                      </div>                                             
                                      <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control" id="telefonoP" placeholder="Telefono" autocomplete="off">
                                      </div>
                                      <div class="form-group">
                                        <label>Dirección</label>
                                        <input type="text" class="form-control" id="direccionP" placeholder="Dirección" autocomplete="off">
                                      </div>
                                </div>
                            </form>
                         </div>
                         <div class="modal-box-footer">
                            <button type="button" class="btn btn-primary" id="Modificar">Modificar</button>
                            <button type="button" class="btn btn-primary" id="Eliminar">Eliminar</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.Termina modal -->