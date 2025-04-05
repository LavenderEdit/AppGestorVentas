<aside class="bg-light p-3">
    <ul class="nav flex-column">
        <!-- Usuarios -->
        <li class="nav-item">
            <a class="nav-link fw-bold" data-bs-toggle="collapse" href="#collapseUsuarios" role="button">
                <i class="bi bi-people"></i> Usuarios
            </a>
            <div class="collapse" id="collapseUsuarios">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=usuarios&action=crear">Crear
                            Usuario</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=usuarios&action=index">Mostrar
                            Todos</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=usuarios&action=buscar">Buscar por
                            ID</a></li>
                </ul>
            </div>
        </li>

        <!-- Clientes -->
        <li class="nav-item">
            <a class="nav-link fw-bold" data-bs-toggle="collapse" href="#collapseClientes" role="button">
                <i class="bi bi-person"></i> Clientes
            </a>
            <div class="collapse" id="collapseClientes">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=clientes&action=crear">Crear
                            Cliente</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=clientes&action=index">Mostrar
                            Todos</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=clientes&action=buscar">Buscar por
                            ID</a></li>
                </ul>
            </div>
        </li>

        <!-- Productos -->
        <li class="nav-item">
            <a class="nav-link fw-bold" data-bs-toggle="collapse" href="#collapseProductos" role="button">
                <i class="bi bi-box"></i> Productos
            </a>
            <div class="collapse" id="collapseProductos">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=productos&action=crear">Crear
                            Producto</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=productos&action=index">Mostrar
                            Todos</a></li>
                    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=productos&action=buscar">Buscar
                            por ID</a></li>
                </ul>
            </div>
        </li>
    </ul>
</aside>