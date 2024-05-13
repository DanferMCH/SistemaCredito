<!-- modal de Amortizar -->
<div class="modal fade" id="modalAmortizar" tabindex="-1" aria-labelledby="ModalActualizarAria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="frm_amortizar" action="{{route('credito.amortizacion')}}" method="POST">
                @csrf
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">Ingresar Monto
                        a Amortizar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" id="AmortizarId" name="AmortizarId"
                            hidden>
                    <div class="col-md-12">
                        <label for="AmortizarNombreCompleto" class="form-label">Nombres y apellidos</label>
                        <input type="text" class="form-control" id="AmortizarNombreCompleto" name="AmortizarNombreCompleto"
                        readonly required>
                    </div>
                    <div class="col-md-12">
                        <label for="AmortizarDeudaTotal" class="form-label">Deuda Total</label>
                        <input type="tel" class="form-control" id="AmortizarDeudaTotal" name="AmortizarDeudaTotal" readonly
                            required>
                    </div>
                    <hr class="my-3 mx-n4">
                    <div class="col-md-12">
                        <label for="AmortizarPagoRealizado" class="form-label">Ingresar pago</label>
                        <input type="tel" class="form-control" id="AmortizarPagoRealizado" name="AmortizarPagoRealizado" required> 
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-success" id="btnAmortizarDeudaModal"
                        style="margin: 8px">Pagar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>