<!-- modal de Amortizar -->
<div class="modal fade" id="modalActualizarUsuario" tabindex="-1" aria-labelledby="ModalActualizarAria" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frm_amortizar" action="{{ route('user.update') }}" method="POST">
                @csrf
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 " style="text-align: center" id="exampleModalLabel">Actualizar Datos de
                        Usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="idActualizarUsuario" name="idActualizarUsuario"
                        hidden>
                    <div class="col-md-12">
                        <label for="ActualizarUsuarioNombreCompleto" class="form-label">Nombres y apellidos</label>
                        <input type="text" class="form-control " id="ActualizarUsuarioNombreCompleto" name="ActualizarUsuarioNombreCompleto" required>
                    </div>
                    <div class="col-md-12">
                        <label for="ActualizarUsuarioEmail" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="ActualizarUsuarioEmail"
                            name="ActualizarUsuarioEmail" required>
                    </div>
                    <div class="col-md-12">
                        <label for="ActualizarUsuarioPassword" class="form-label"> Contraseña</label>
                        <input type="password" class="form-control" id="ActualizarUsuarioPassword"
                            name="ActualizarUsuarioPassword" required>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-success" id="btnActualizarUsuarioModal"
                        style="margin: 8px">Actualizar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>