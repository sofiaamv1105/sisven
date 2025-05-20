<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        body {
            padding-top: 70px;
            /* espacio para navbar fijo */
        }
    </style>
</head>

<body class="bg-light">

    @include('layouts.navigation')

    <!-- Panel principal -->
    <div class="container py-5">
        <h1 class="text-center mb-5 text-primary">Bienvenido al Panel Principal</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <!-- Categorías -->
            <div class="col">
                <div class="card h-100 card-hover border-primary">
                    <div class="card-body text-center">
                        <i class="bi bi-tags fs-1 text-primary"></i>
                        <h5 class="card-title mt-3">Categorías</h5>
                        <p class="card-text">Administrar categorías de productos.</p>
                        <a href="{{ url('/api/categories') }}" class="btn btn-outline-primary">Ir</a>
                    </div>
                </div>
            </div>

            <!-- Productos -->
            <div class="col">
                <div class="card h-100 card-hover border-success">
                    <div class="card-body text-center">
                        <i class="bi bi-box-seam fs-1 text-success"></i>
                        <h5 class="card-title mt-3">Productos</h5>
                        <p class="card-text">Gestión de productos y su inventario.</p>
                        <a href="{{ url('/api/products') }}" class="btn btn-outline-success">Ir</a>
                    </div>
                </div>
            </div>

            <!-- Modos de Pago -->
            <div class="col">
                <div class="card h-100 card-hover border-warning">
                    <div class="card-body text-center">
                        <i class="bi bi-credit-card fs-1 text-warning"></i>
                        <h5 class="card-title mt-3">Modos de Pago</h5>
                        <p class="card-text">Opciones disponibles para pagos.</p>
                        <a href="{{ url('/api/pay_modes') }}" class="btn btn-outline-warning">Ir</a>
                    </div>
                </div>
            </div>

            <!-- Clientes -->
            <div class="col">
                <div class="card h-100 card-hover border-danger">
                    <div class="card-body text-center">
                        <i class="bi bi-people fs-1 text-danger"></i>
                        <h5 class="card-title mt-3">Clientes</h5>
                        <p class="card-text">Listado y gestión de clientes.</p>
                        <a href="{{ url('/api/customers') }}" class="btn btn-outline-danger">Ir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>