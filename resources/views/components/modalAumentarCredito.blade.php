<!-- modal de aumentar credito -->
<div class="modal fade" id="modalAumentar" tabindex="-1" aria-labelledby="ModalActualizarAria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frm_aumentar" action="{{route('credito.aumentar')}}" method="POST">
                @csrf
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Ingresar Monto
                        a Aumentar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="AumentarId" name="AumentarId"
                            hidden>
                    <div class="col-md-12">
                        <label for="nombres" class="form-label">Nombres y apellidos</label>
                        <input type="text" class="form-control" id="AumentarNombreCompleto" name="AumentarNombreCompleto" readonly
                         required>
                    </div>
                    <div class="col-md-12">
                        <label for="telefono" class="form-label">Deuda Total</label>
                        <input type="tel" class="form-control" id="AumentarDeudaTotal" name="AumentarDeudaTotal" readonly
                            required>
                    </div>
                    <hr class="my-3 mx-n4">
                    <div class="col-md-12">
                        <label for="telefono" class="form-label">Ingresar monto a adicional</label>
                        <input type="tel" class="form-control" id="AumentarMonto" name="AumentarMonto"
                            required>
                    </div>
                    <div class="col-12">
                        <label for="descripcion" class="form-label">Descripcion (opcional)</label>
                        <textarea class="form-control" id="AumentarDescripcion" name="AumentarDescripcion"
                            rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-success" id="btnAumentarDeudaModal"
                        style="margin: 8px">Actualizar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>