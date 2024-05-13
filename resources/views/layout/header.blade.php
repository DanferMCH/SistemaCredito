    <style>
        .nav-link-style {
            font-family: 'Varela Round', sans-serif;
            font-size: 18px;
        }

        .style-nav-bar {
            justify-content: end;
            padding: 0px 60px 0px 30px;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background: #eafff0">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="{{ '/images/logo-sin-fondo.png' }}" alt="Logo" width="150px" height="60px"
                    class="d-inline-block align-text-top img-fluid">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse style-nav-bar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('principal') ? 'active' : '' }}"
                            href= "{{ route('principal') }}"><strong>INICIO</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('cliente.create') ? 'active' : '' }}" href= "{{route('cliente.create')}}"><strong>REGISTRAR CREDITO</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('credito.history') ? 'active' : '' }} " href="{{route('credito.history')}}"><strong>TRANSACCIONES</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style {{ request()->routeIs('user.create') ? 'active' : '' }}" href="{{route('user.create')}}"><strong>CONFIGURACIÓN</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-style " href='{{route('login')}}'><strong>SALIR</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
