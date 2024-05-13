@extends('plantillaLogin')
@section('title', 'Login')
@section('css')
    <link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')

    <div class="estilo-principal-login">
        <div class="estilo-login">
            <div class="text-center" style="padding-top: 35px;">
                <img src={{ asset('images/logo.jpg') }} class="img-fluid" alt="imagen" style="width: 190px;">
            </div>
            <div class="estilo-titulo text-center">
                <h3>INICIAR SESION</h3>
            </div>
            <div class="formulario-validar">
                <form id="frm-ingreso" action="{{ route('user.auth') }}" method="POST">
                    @csrf
                    <div class="mb-3 input-ancho">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3 input-ancho">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password"required>
                    </div>
                    <div class="text-center" style="margin-top: 35px;">
                        <button type="submit" class="btn btn-primary btn-color" id="boton-login"
                            style="width: 200px;">ENTRAR</button>
                    </div>
                </form>
            </div>
            @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{{ session('error') }}",
                });
            </script>
            @endif
        </div>
    </div>
@endsection
