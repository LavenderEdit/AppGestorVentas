<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-lg"
    style="background: linear-gradient(45deg, #1a1a1a, #2d2d2d);">
    <div class="container">
        <!-- Logo con efecto hover -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="public/images/icons/icon-app.ico" alt="Logo" width="40" height="40"
                class="me-2 rounded-circle shadow-sm">
            <span class="fw-bold">MP-PHP</span>
        </a>

        <!-- Botón móvil mejorado -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Elementos del menú -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <!-- Elementos con efecto hover y iconos -->
                <li class="nav-item mx-2">
                    <a class="nav-link d-flex align-items-center active-link" href="public/index.php#hero">
                        <i class="fas fa-home me-2"></i>Inicio
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link d-flex align-items-center" href="public/index.php#about">
                        <i class="fas fa-users me-2"></i>Sobre Nosotros
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link d-flex align-items-center" href="public/index.php#services">
                        <i class="fas fa-cube me-2"></i>Servicios
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link d-flex align-items-center" href="public/index.php#contact">
                        <i class="fas fa-envelope me-2"></i>Contacto
                    </a>
                </li>
            </ul>

            <!-- Botones de acción con efectos -->
            <div class="d-flex align-items-center">
                <?php if (isset($_SESSION['usuario'])): ?>
                    <div class="dropdown">
                        <a class="btn btn-success rounded-pill px-4 dropdown-toggle" href="#" role="button"
                            id="userDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-2"></i><?= $_SESSION['usuario']['nombre'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li><a class="dropdown-item" href="/dashboard">
                                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="/logout">
                                    <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="<?= BASE_URL ?>/login" class="btn btn-primary rounded-pill px-4">
                        <i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>