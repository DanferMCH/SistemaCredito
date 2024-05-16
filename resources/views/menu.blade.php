@extends('plantilla')
@section('title', 'Menu Principal')

@section('css')
    <link rel="stylesheet" href="/css/menu.css">
@endsection
@include('components.modalDetallesDatosPersonales')
@section('content')

    <body>
        <section>
            <div class="container text-center" style="padding-top: 200px;">
                <div class="row row-cols-1 row-cols-sm-2">
                    <div class="col">
                        <div class="container estilo-contenedor align-items-center" style="background-color: #d82828;">
                            <div class="container text-center centrar-contenedor">
                                <div class="row row-cols-2 text-center contenedor-inferior">
                                    <div class="col" style="width: 20%;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                            fill="currentColor" class="bi bi-cash-coin color-texto-monto"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                            <path
                                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                            <path
                                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                                        </svg>
                                    </div>
                                    <div class="col color-texto-monto" style="width: 80%;">
                                        <h3>MONTO DE LAS CUENTAS</h3>
                                        <h1 id="monto">{{ $sumaDeuda }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="container estilo-contenedor align-items-center" style="background-color: #d82828;">
                            <div class="container text-center centrar-contenedor">
                                <div class="row row-cols-2  text-center contenedor-inferior">
                                    <div class="col" style="width: 20%;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120"
                                            fill="currentColor" class="bi bi-person-fill color-texto-personas"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg>
                                    </div>
                                    <div class="col color-texto-personas" style="width: 80%">
                                        <h3>TOTAL DE PERSONAS</h3>
                                        <h1 id="personas">{{ $cantidadClientes }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <section>
            <div class="container contenedor-datos">
                <div class="table-responsive text-nowrap">
                    <table class="table " id="tabla-datos">
                        <caption>Clientes con deudas</caption>
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
                        <tbody id="table-body">

                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->idCliente }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->phone_number }}</td>
                                    <td>{{ $client->debt }}</td>
                                    <td>{{ $client->pay_date }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-success" data-bs-toggle="modal" style="height: 40px;"
                                                data-bs-target="#modalAgregar" data-id="{{ $client->idCliente }}"
                                                data-bs-whatever="@mdo" href="">Detalles</button>

                                            <a class="btn btn-warning" style="height: 40px;"
                                                href={{ route('cliente.edit', $client->idCliente) }}>Actualizar</a>

                                            <form  id="frm-eliminar-credito" action="{{ route('cliente.delete', $client->idCliente) }}" method="post"
                                                style="height: 40px;">
                                                @csrf
                                                @method('delete')
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
    </body>
    

@endsection
