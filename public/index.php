<?php
require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_URL', '/GestorVentas/public');
date_default_timezone_set('America/Lima');

$router = new App\Core\Router();

require_once __DIR__ . '/../app/routes/web.php';

$router->dispatch();
?>
<?php
require_once '../app/views/template/header.php';
require_once '../app/views/includes/navbar.php';
?>

<main class="container-fluid p-0">
    <!-- Carrusel Bootstrap Mejorado -->
    <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active rounded-circle"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" class="rounded-circle"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" class="rounded-circle"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" class="rounded-circle"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4" class="rounded-circle"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="carousel-image-container">
                    <img src="../public/images/img/Análisis Financiero.jpg" class="d-block w-100" alt="Gestión de Ventas">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="caption-content">
                        <h5 class="typewriter-title">Sistema Integral de Ventas</h5>
                        <p class="typewriter-text">Control completo de tu negocio en una sola plataforma</p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item" data-bs-interval="5000">
                <div class="carousel-image-container">
                    <img src="../public/images/img/Gestión de Inventario.png" class="d-block w-100" alt="Control de Inventario">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="caption-content">
                        <h5 class="typewriter-title">Gestión de Inventario</h5>
                        <p class="typewriter-text">Control preciso de tus productos y stock</p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item" data-bs-interval="5000">
                <div class="carousel-image-container">
                    <img src="../public/images/img/Reportes.jpg" class="d-block w-100" alt="Reportes">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="caption-content">
                        <h5 class="typewriter-title">Reportes Detallados</h5>
                        <p class="typewriter-text">Toma decisiones basadas en datos reales</p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item" data-bs-interval="5000">
                <div class="carousel-image-container">
                    <img src="../public/images/img/Atención al Cliente.jpg" class="d-block w-100" alt="Clientes">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="caption-content">
                        <h5 class="typewriter-title">Gestión de Clientes</h5>
                        <p class="typewriter-text">Administra tu base de clientes eficientemente</p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item" data-bs-interval="5000">
                <div class="carousel-image-container">
                    <img src="../public/images/img/Facturación Electrónica.jpg" class="d-block w-100" alt="Facturación">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <div class="caption-content">
                        <h5 class="typewriter-title">Facturación Electrónica</h5>
                        <p class="typewriter-text">Genera comprobantes fácilmente</p>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark bg-opacity-75 rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark bg-opacity-75 rounded-circle p-3" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Sección de características -->
    <section class="seccion-funcionalidades">
    <div class="container py-5"> <!-- Contenedor Bootstrap para el contenido -->
        <h2 class="text-center mb-5 text-white">Funcionalidades Principales</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="tarjeta-funcionalidad h-100 p-4 text-center">
                    <div class="card-body text-center">
                        <i class="fas fa-cash-register fa-3x text-primary mb-3"></i>
                        <h4 class="card-title">Gestión de Ventas</h4>
                        <p class="card-text">Registro y seguimiento de todas tus transacciones comerciales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tarjeta-funcionalidad h-100 p-4 text-center">
                    <div class="card-body text-center">
                        <i class="fas fa-boxes fa-3x text-primary mb-3"></i>
                        <h4 class="card-title">Control de Inventario</h4>
                        <p class="card-text">Administración detallada de productos y existencias.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tarjeta-funcionalidad h-100 p-4 text-center">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-pie fa-3x text-primary mb-3"></i>
                        <h4 class="card-title">Reportes Avanzados</h4>
                        <p class="card-text">Genera análisis detallados de tu rendimiento comercial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</main>

<?php
require_once '../app/views/includes/footer.php';
?>