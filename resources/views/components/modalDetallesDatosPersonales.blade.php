<!-- modal de detalles -->
<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="ModalAgregarAria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frm_guardar">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel" style="padding-left: 120px">Detalles Personales</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <label for="nombres" class="form-label">Nombres y apellidos</label>
                        <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" disabled>
                    </div>
                    <div class="col-md-12">
                        <label for="telefono" class="form-label">Numero de Celular</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" disabled>
                    </div>
                    <div class="col-md-12">
                        <label for="direccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion"disabled>
                    </div>
                    <div class="col-md-12">
                        <label for="monto" class="form-label">Monto</label>
                        <input type="text" class="form-control" id="deudaPendiente" name="deudaPendiente" disabled>
                    </div>
                    <div class="col-md-12">
                        <label for="monto" class="form-label">Fecha inicio</label>
                        <input class="form-control" type="text" id="fechaInicio" name="fechaInicio"disabled>
                    </div>
                    <div class="col-md-12">
                        <label for="monto" class="form-label">Fecha pago</label>
                        <input class="form-control" type="text" id="fechaPago" name="fechaPago"disabled>
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="descripcion" rows="3" disabled></textarea>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>