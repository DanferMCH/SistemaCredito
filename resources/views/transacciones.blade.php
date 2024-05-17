@extends('plantilla')
@section('title', 'Historial de creditos')

@section('css')
    <link rel="stylesheet" href="/css/transacciones.css">
@endsection

@section('content')

        <body>
            <section>
                <div class="container contenedor-datos ">
                    <div class="table-responsive text-nowrap">
                        <table class="table " id="tabla-datos">
                            <caption>Historial de pagos</caption>
                            <thead>
                                <tr class="table-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">NOMBRES Y APELLIDOS</th>
                                    <th scope="col">PAGO</th>
                                    <th scope="col">ESTADO</th>
                                    <th scope="col">FECHA</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach ($histories as $history)
                                    <tr>
                                        <td>{{ $history->id }}</td>
                                        <td>{{ $history->name }}</td>
                                        <td>{{ $history->pay }}</td>
                                        <td>
                                            @if ($history->state == 1)
                                            <span class='badge text-bg-success' style= 'padding: 7px'>Amortizo</span>
                                            @elseif ($history->state == 2)
                                            <span class='badge text-bg-danger'style= 'padding: 7px'>Incremento</span>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($history->date)->format('d-m-Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </body>
    @endsection
