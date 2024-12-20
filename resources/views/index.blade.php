<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Farmacéutico</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('public/jule.js') }}" defer></script>
</head>

<body>
    <style>
        body {
            background-color: lightgray;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-3">
        <div class="container-fluid">
            <button class="btn btn-dark me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand" href="#">Cruz Azul</a>
            <div class="d-flex align-items-center ms-auto">
                @if(isset($user))
                    <span class="text-white me-3">{{ $user['name'] }} ({{ $user['role'] }})</span>
                @endif
                <a href="#" class="text-white me-3">
                    <i class="bi bi-bell"></i>
                </a>
                <a href="#" class="text-white me-3">
                    <i class="bi bi-envelope"></i>
                </a>
                <div class="dropdown">
                <a href="#" class="text-white dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Configuración</a></li>
                        <li><a class="dropdown-item" href="#">Cambiar Contraseña</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasSidebar" aria-labelledby="offcanvasSidebarLabel " >
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSidebarLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('index') }}"><i class="bi bi-house-door"></i> Dashboard</a>
                </li>

                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle bi bi-box" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-popper-placement="bottom-start" style="position: absolute; inset: 0px auto auto 0px; margin: -39px; transform: translate(40px, 40px);">
                        Gestion de Productos
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark position-static">
                        <li><a class="dropdown-item text-white" href="/nuevoproducto">Nuevo Producto</a></li>
                        <li><a class="dropdown-item text-white" href="/listaproducto">Lista de productos</a></li>
                    </ul>
                </div>

                <li class="nav-item">
                    <a class="nav-link text-white" style="margin-top: 39px;" href="/inventario"><i class="bi bi-cart-check"></i> Inventario</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="bi bi-receipt"></i> Ventas y Facturación</a>
                </li>

                <li class="nev-item">
                    <a class="nav-link text-white" href="/facturacion"><i class="bi bi-card-checklist"></i> factuacion</a>
                </li>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle bi bi-people" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="position: absolute; inset: 0px auto auto 0px; margin: -39px; transform: translate(40px, 40px);" data-popper-placement="bottom-start">
                        Cliente
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark position-static ">
                        <li><a class="dropdown-item text-white" href="/registrocliente">registro</a></li>
                        <li><a class="dropdown-item text-white" href="/listaclientes">Lista</a></li>
                    </ul>
                </div>

                <li class="nav-item ">
                    <a class="nav-link text-white" style="margin-top: 43px;" href="/proveedores"><i class="bi bi-truck"></i> Proveedores</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="/reporte"><i class="bi bi-bar-chart"></i> Reportes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="bi bi-gear"></i> Configuración</a>
                </li>

            </ul>


        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <h5 class="card-title">Productos en Inventario</h5>
                        <p class="card-text">150</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ventas del Día</h5>
                        <p class="card-text">$1,200</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Próximos a Vencer</h5>
                        <p class="card-text">5 productos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h5 class="card-title">Stock Bajo</h5>
                        <p class="card-text">8 productos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
