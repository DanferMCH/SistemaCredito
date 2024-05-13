@extends('plantilla')
@section('title', 'Actualizar')

@section('css')
    <link rel="stylesheet" href="/css/actualizar.css">
@endsection
@section('content')

    <div class="estilo-panel-agregar">
        <div class="row row row-cols-1 row-cols-sm-2 row-cols-md-4">
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(84, 84, 84);" width="26" height="26"
                            fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                            <path
                                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                        </svg>
                        <h5>ACTUALIZAR DATOS PERSONALES</h5>
                        <p>Desea Agregar un actualizar los datos personales </p>
                        <button type="button"
                            class="btn btn-primary btn-actualizar waves-effect waves-light btn-actualizar-datos"
                            data-id="{{ $id }}" data-bs-target='#modalActualizar' data-bs-toggle="modal">Ingresar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(84, 84, 84);" width="26"
                            height="26" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                            <path
                                d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z" />
                        </svg>
                        <h5>AMORTIZACION</h5>
                        <p>Desea Agregar un amortizacion para reducir sus deuda</p>
                        <button type="button" class="btn btn-primary btn-amortizar waves-effect waves-light"
                            data-id="{{ $id }}" data-bs-target='#modalAmortizar' data-bs-toggle="modal">Ingresar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(84, 84, 84);" width="26"
                            height="26" fill="currentColor" class="bi bi-sort-up" viewBox="0 0 16 16">
                            <path
                                d="M3.5 12.5a.5.5 0 0 1-1 0V3.707L1.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L3.5 3.707zm3.5-9a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                        </svg>
                        <h5>AUMENTAR CREDITO</h5>
                        <p>Desea agregar para aumentar el credito de su deuda</p>
                        <button type="button"
                            class="btn btn-primary btn-aumentarCredito waves-effect waves-light btn-aumentar"
                            data-id="{{ $id }}" data-bs-target='#modalAumentar' data-bs-toggle="modal">Ingresar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: rgb(84, 84, 84);" width="26"
                            height="26" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                            <path
                                d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg>
                        <h5>ACTUALIZAR FECHA DE PAGO</h5>
                        <p>Desea actualizar la fecha de pago de su deuda</p>
                        <button type="button"
                            class="btn btn-primary btn-actualizarFecha waves-effect waves-light btn-actualizar-fecha"
                            data-id="{{ $id }}" data-bs-target='#modalActualizarFecha'
                            data-bs-toggle='modal'>Ingresar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.modalActualizarDatosPersonales')
    @include('components.modalAmortizacionCredito')
    @include('components.modalAumentarCredito')
    @include('components.modalActualizarFecha')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- enviar datos personales a model --}}
    <script>
        $(document).ready(function() {
            $('.btn-actualizar').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('cliente.detalle', ':id') }}".replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#ActualizarId').val(response.idCliente);
                        $('#ActualizarNombreCompleto').val(response.name);
                        $('#ActualizarTelefono').val(response.phone_number);
                        $('#ActualizarDireccion').val(response.location);

                    }
                });
            });
        });
    </script>
    {{-- enviar datos de amortizar credito a model --}}
    <script>
        $(document).ready(function() {
            $('.btn-amortizar').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('cliente.detalle', ':id') }}".replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#AmortizarId').val(response.idCliente);
                        $('#AmortizarNombreCompleto').val(response.name);
                        $('#AmortizarDeudaTotal').val(response.debt);

                    }
                });
            });
        });
    </script>
    {{-- enviar datos de aumentar credito a model --}}
    <script>
        $(document).ready(function() {
            $('.btn-aumentarCredito').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('cliente.detalle', ':id') }}".replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#AumentarId').val(response.idCliente);
                        $('#AumentarNombreCompleto').val(response.name);
                        $('#AumentarDeudaTotal').val(response.debt);
                    }
                });
            });
        });
    </script>
    {{-- enviar datos de actualizar fecha de credito a model --}}
    <script>
        $(document).ready(function() {
            $('.btn-actualizarFecha').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('cliente.detalle', ':id') }}".replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#ActualizaFechaId').val(response.idCliente);
                        $('#ActualizarFechanombreCompleto').val(response.name);
                        $('#ActualizarfechaInicio').val(moment(response.star_date).format(
                            'DD-MM-YYYY'));
                        $('#ActualizarFechafechaPagoActual').val(moment(response.pay_date)
                            .format('DD-MM-YYYY'));
                    }
                });
            });
        });
    </script>
    {{-- actualizar datos personales --}}
    <script>
        $('#frm_actualizar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Está seguro?",
                text: "Se actualizará los datos del cliente ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Actualizar',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }
            });

        });
    </script>

    {{-- Actualizar datos de amortizacion --}}
    <script>
        $('#frm_amortizar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Está seguro?",
                text: "Se actualizará el credito actual ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Actualizar',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.value) {
                    var variable1 = parseInt(document.getElementById("AmortizarDeudaTotal").value, 10);
                    var variable2 = parseInt(document.getElementById("AmortizarPagoRealizado").value, 10);
                    if (variable1 >= variable2) {
                        this.submit();
                    } else {
                        Swal.fire({
                            title: "Ocurrio algo!",
                            text: "El monto ingresado no es valido",
                            icon: "error"
                        });
                    }
                }

            });

        });
    </script>

    {{-- Actualizar credito aumentndo --}}
    <script>
        $('#frm_aumentar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Está seguro?",
                text: "Se actualizará el credito actual ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Actualizar',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.value) {
                    var montoAumentar = parseInt(document.getElementById("AumentarMonto").value, 10);
                    if (montoAumentar > 0) {
                        this.submit();
                    } else {
                        Swal.fire({
                            title: "Ocurrio algo!",
                            text: "El monto ingresado no es valido",
                            icon: "error"
                        });
                    }
                }

            });

        });
    </script>

    {{-- Actualizar fecha de credito --}}
    <script>
        $('#frm_actualizar_fecha').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Está seguro?",
                text: "Se actualizará la fecha de pago ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Actualizar',
                customClass: {
                    confirmButton: 'btn btn-primary me-3',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            }).then((result) => {
                if (result.value) {
                    this.submit();
                }

            });

        });
    </script>

@endsection
