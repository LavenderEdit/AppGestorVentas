<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="../public/index.php">
            <img src="../public/images/icons/icon-app.ico" alt="MP-PHP Logo" width="30" height="30">
            MP-PHP
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php#sobre-nosotros">Sobre
                        Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php#mision">Misión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php#vision">Visión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../public/index.php#derechos-reservados">Derechos
                        Reservados</a>
                </li>
            </ul>

            <?php if (isset($_SESSION['usuario'])): ?>
                <!-- Usuario autenticado -->
                <a href="../public/dashboard.php" class="btn btn-success">Ir al Dashboard</a>
                <a href="../app/controllers/logout.php" class="btn btn-danger ms-2">Cerrar Sesión</a>
            <?php else: ?>
                <!-- Usuario no autenticado -->
                <a href="../app/views/auth/login.php" class="btn btn-primary">Iniciar Sesión</a>
            <?php endif; ?>
        </div>
    </div>
</nav>