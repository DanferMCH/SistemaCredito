    <!-- modal de Actualizar datos personales -->
    <div class="modal fade" id="modalActualizar" tabindex="-1" aria-labelledby="ModalActualizarAria" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frm_actualizar" action="{{route('cliente.update')}}" method="POST">
                    @csrf
                    <div class="modal-header text-center">
                        <h1 class="modal-title fs-5 " id="exampleModalLabel">Actualizar
                            datos Personales</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" id="ActualizarId" name="ActualizarId" 
                                hidden>
                        <div class="col-md-12">
                            <label for="nombres" class="form-label">Nombres y apellidos</label>
                            <input type="text" class="form-control" id="ActualizarNombreCompleto" name="ActualizarNombreCompleto" required>
                        </div>
                        <div class="col-md-12">
                            <label for="telefono" class="form-label">Numero de Celular</label>
                            <input type="tel" class="form-control" id="ActualizarTelefono" name="ActualizarTelefono" required>
                        </div>
                        <div class="col-md-12">
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="ActualizarDireccion" name="ActualizarDireccion" required>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-success" style="margin: 8px"
                            id="btnActualizarDatosModal">Actualizar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


