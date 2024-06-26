@extends('plantilla')
@section('title', 'Agregar Cliente')

@section('css')
    <link rel="stylesheet" href="/css/agregar.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
    <section>
        <div class="container estilo-panel-agregar">
            <div>
                <h3>AGREGAR NUEVO CREDITO</h3>
            </div>
            <form class="row g-3" id="form-agregar" action="{{ route('cliente.store') }}" method="POST">
                @csrf

                @if (session()->has('errors'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach (session('errors')->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-md-6">
                    <label for="nombres" class="form-label">Nombres y apellidos</label>
                    <input type="text" class="form-control" id="CrearNombreCompleto" name="CrearNombreCompleto"
                        value="{{ old('CrearNombreCompleto') }}">

                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Número de Celular</label>
                    <input type="tel" class="form-control" id="CrearTelefono" name="CrearTelefono"
                        value="{{ old('CrearTelefono') }}">
                </div>
                <div class="col-md-6">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="CrearDireccion" name="CrearDireccion"
                        value="{{ old('CrearDireccion') }}">
                </div>
                <div class="col-md-6">
                    <label for="monto" class="form-label">Monto</label>
                    <input type="text" class="form-control" id="CrearMonto" name="CrearMonto"
                        value="{{ old('CrearMonto') }}">
                </div>
                <div class="col-md-6">
                    <label for="monto" class="form-label">Fecha inicio</label>
                    <input class="form-control" type="date" id="CrearFechaInicio" name="CrearFechaInicio"
                        value="{{ old('CrearFechaInicio') }}">
                </div>
                <div class="col-md-6">
                    <label for="monto" class="form-label">Fecha pago</label>
                    <input class="form-control" type="date" id="CrearFechaPago" name="CrearFechaPago"
                        value="{{ old('CrearFechaPago') }}">
                </div>
                <div class="col-12">
                    <label for="descripcion" class="form-label">Descripción (opcional)</label>
                    <textarea class="form-control" id="CrearDescripcion" name="CrearDescripcion" rows="3">{{ old('CrearDescripcion') }}</textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary" id="btnGuardar">REGISTRAR CREDITO</button>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container contenedor-datos">
            <div class="table-responsive text-nowrap">
                <table class="table" id="tabla-datos-agregar">
                    <caption>Personas con deudas</caption>
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRES Y APELLIDOS</th>
                            <th scope="col">CELULAR</th>
                            <th scope="col">MONTO</th>
                            <th scope="col">FECHA DE PAGO</th>
                            <th scope="col" style="width: 300px;">OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody id="table-body-agregar">
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->idCliente }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->phone_number }}</td>
                                <td>{{ $client->debt }}</td>
                                <td>{{ $client->pay_date }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#modalAgregar" data-id="{{ $client->idCliente }}"
                                            data-bs-whatever="@mdo" style="height: 40px;">Detalles</button>
                                        <a class="btn btn-warning" href={{ route('cliente.edit', $client->idCliente) }}
                                            style="height: 40px;">Actualizar</a>
                                        <form id="frm-eliminar-credito" action="{{ route('cliente.delete') }}"
                                            method="post" style="height: 40px;">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="delete_monto" id="delete_monto"
                                                value="{{ $client->debt }}">
                                            <input type="hidden" name="delete_id" id="delete_id"
                                                value="{{ $client->idCliente }}">
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    @include('components.modalDetallesDatosPersonales')

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: "{{ session('success') }}",
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
            });
        </script>
    @endif

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('#tabla-datos-agregar').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
                "infoFiltered": "(filtrado de _MAX_ entradas totales)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "previous": "Anterior",
                    "next": "Siguiente",
                    "last": "Último"
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.btn-success').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('cliente.detalle', ':id') }}".replace(':id', id),
                    type: 'GET',
                    success: function(response) {

                        $('#nombreCompleto').val(response.name);
                        $('#telefono').val(response.phone_number);
                        $('#direccion').val(response.location);
                        $('#deudaPendiente').val(response.debt);
                        $('#fechaInicio').val(response.star_date);
                        $('#fechaPago').val(response.pay_date);
                        $('#descripcion').val(response.description);

                    }
                });
            });
        });
    </script>
    {{-- eliminar credito --}}
    <script>
        $('#frm-eliminar-credito').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: "¿Está seguro?",
                text: "Se eliminara el credito del cliente ",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, eliminar',
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
