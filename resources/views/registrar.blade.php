@extends('plantilla')
@section('title', 'Registrar')
@section('css')
    <link rel="stylesheet" href="/css/registrar.css">
@endsection
@section('content')

    <section>
        <div class="container contenedor-card">
            <div class="row">
                <div class="col col-lg-4">
                    <section>
                        <div class="card">
                            <h2 style="color: green; text-align: center">Registrar Usuario</h2>
                            <form class="px-4 py-3" id="form-agregarUsuario" action="{{ route('user.store') }}" method="POST">
                                @csrf
                                @if ($errors->has('name') || $errors->has('email') || $errors->has('password'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre y apellidos</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        value="{{ old('name') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}">
                                </div>
                                <div class="centrado" style="text-align: center">
                                    <button type="submit" class="btn btn-primary" style="margin: 8px">Guardar
                                        Cuenta</button>
                                </div>
                            </form>
                        </div>

                    </section>
                </div>
                <br>
                <div class="col">
                    <section>
                        <div class="container contenedor-datos">
                            <div class="table-responsive text-nowrap">
                                <table class="table " id="tabla-datos-agregar">
                                    <caption>Usuarios</caption>
                                    <thead>
                                        <tr class="table-dark">
                                            <th scope="col">ID</th>
                                            <th scope="col">NOMBRES Y APELLIDOS</th>
                                            <th scope="col">USUARIO</th>
                                            <th scope="col" style="width: 300px;">OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body-agregar">
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center gap-2">
                                                        <button class="btn btn-success" data-bs-toggle="modal"
                                                            data-bs-target="#modalActualizarUsuario"
                                                            data-id="{{ $user->id }}" data-bs-whatever="@mdo"
                                                            style="height: 40px;" href="">Actualizar</button>
                                                        <form action="{{ route('user.delete', $user) }}" method="post"
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
                </div>
            </div>
        </div>
    </section>

    @include('components.modalActualizarUsuario')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.btn-success').click(function() {
                var id = $(this).data('id');
                $.ajax({
                    url: "{{ route('user.search', ':id') }}".replace(':id', id),
                    type: 'GET',
                    success: function(response) {
                        $('#idActualizarUsuario').val(id);
                        $('#ActualizarUsuarioNombreCompleto').val(response.name);
                        $('#ActualizarUsuarioEmail').val(response.email);
                    }
                });

            });
        });
    </script>




@endsection
