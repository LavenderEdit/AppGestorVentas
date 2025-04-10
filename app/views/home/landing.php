<?php include __DIR__ . '/../template/header.php'; ?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<!-- Contenido principal actualizado -->
<div class="main-content">
    <div class="container" id="hero">
        <!-- Tarjeta de información empresarial mejorada -->
        <div class="card mb-5 border-0 shadow-lg">
            <div class="card-header bg-primary text-white py-4">
                <h2 class="mb-0 d-flex align-items-center">
                    <i class="fas fa-building fa-shake me-3"></i>
                    <?= $empresa['razon_social'] ?>
                </h2>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-card bg-light p-4 rounded-3">
                            <h4 class="text-primary mb-3">
                                <i class="fas fa-fingerprint me-2"></i>
                                Identidad Legal
                            </h4>
                            <dl class="row">
                                <dt class="col-sm-5">RUC:</dt>
                                <dd class="col-sm-7">
                                    <span class="badge bg-dark"><?= $empresa['ruc'] ?></span>
                                </dd>

                                <dt class="col-sm-5">Dirección:</dt>
                                <dd class="col-sm-7"><?= $empresa['direccion'] ?></dd>
                            </dl>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="info-card bg-light p-4 rounded-3">
                            <h4 class="text-success mb-3">
                                <i class="fas fa-chart-pie me-2"></i>
                                Especialización
                            </h4>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-laptop-code me-3 text-success"></i>
                                    <?= $empresa['rubro_principal'] ?>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-store me-3 text-info"></i>
                                    <?= $empresa['rubro_secundario'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección Misión/Visión mejorada -->
        <div class="row g-4 mb-5" id="about">
            <div class="col-md-6">
                <div class="card h-100 border-start border-4 border-danger shadow-sm">
                    <div class="card-header bg-danger bg-opacity-10">
                        <h3 class="mb-0 text-danger">
                            <i class="<?= $mision_vision['mision']['icono'] ?> me-2"></i>
                            Misión Corporativa
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="lead"><?= $mision_vision['mision']['contenido'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-start border-4 border-warning shadow-sm">
                    <div class="card-header bg-warning bg-opacity-10">
                        <h3 class="mb-0 text-warning">
                            <i class="<?= $mision_vision['vision']['icono'] ?> me-2"></i>
                            Visión Estratégica
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="lead"><?= $mision_vision['vision']['contenido'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Productos rediseñada -->
        <div class="mb-5" id="services">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0 display-6 text-primary">
                    <i class="fas fa-boxes-stacked fa-bounce me-2"></i>
                    Nuestras Soluciones Digitales
                </h3>
                <a href="#contacto" class="btn btn-primary btn-sm">
                    <i class="fas fa-arrow-right me-2"></i>Ver todos
                </a>
            </div>

            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3 g-4">
                <?php foreach ($productos as $producto): ?>
                    <div class="col">
                        <div class="card h-100 hover-top border-0 shadow-sm">
                            <div class="card-header bg-gradient-primary text-black py-3">
                                <h5 class="mb-0 d-flex align-items-center">
                                    <i class="<?= $producto['icono'] ?> me-3"></i>
                                    <?= $producto['titulo'] ?>
                                </h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text"><?= $producto['descripcion'] ?></p>
                                <div class="badge bg-dark">Nuevo</div>
                                <div class="badge bg-success ms-2">Popular</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../includes/footerbar.php'; ?>
<?php include __DIR__ . '/../template/footer.php'; ?>