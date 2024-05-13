
    <!-- modal de actualizar fecha  -->
    <div class="modal fade" id="modalActualizarFecha" tabindex="-1" aria-labelledby="ModalActualizarAria"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frm_actualizar_fecha" action="{{route('credito.actualizarFecha')}}" method="POST">
                    @csrf
                    <div class="modal-header text-center">
                        <h1 class="modal-title fs-5 " id="exampleModalLabel">Actualizar fecha de Pago</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" id="ActualizaFechaId" name="ActualizaFechaId"
                                hidden>
                        <div class="col-md-12">
                            <label for="af-nombreCompleto" class="form-label">Nombres y apellidos</label>
                            <input type="text" class="form-control" id="ActualizarFechanombreCompleto" name="ActualizarFechanombreCompleto"
                                readonly required>
                        </div>
                        <div class="col-md-12">
                            <label for="af-fechaInicio" class="form-label">Fecha inicio</label>
                            <input type="text" class="form-control" id="ActualizarfechaInicio" name="ActualizarfechaInicio" readonly
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="af-fechaPagoActual" class="form-label">Fecha pago actual</label>
                            <input type="text" class="form-control" id="ActualizarFechafechaPagoActual" name="ActualizarFechafechaPagoActual"
                                readonly required>
                        </div>
                        <hr class="my-3 mx-n4">
                        <div class="col-md-12">
                            <label for="af-nuevaFechaPago" class="form-label">Nueva fecha pago</label>
                            <input type="date" class="form-control" id="ActualizarNuevaFechaPago" name="ActualizarNuevaFechaPago"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-success" id="btnActualizarFechaModal"
                            style="margin: 8px">Actualizar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
