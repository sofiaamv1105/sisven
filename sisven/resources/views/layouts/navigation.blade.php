<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/categories') }}">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/products') }}">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/pay_modes') }}">Modos de Pago</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/api/customers') }}">Clientes</a>
                </li>
            </ul>
        </div>
    </div>
</nav>