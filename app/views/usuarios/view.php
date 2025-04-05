<?php include __DIR__ . '/../template/header.php'; ?>
<h2>Detalles del Usuario</h2>
<?php if (isset($usuario)): ?>
    <p><strong>Nombre:</strong> <?php echo $usuario['nombre']; ?></p>
    <p><strong>Correo:</strong> <?php echo $usuario['correo']; ?></p>
    <!-- Agrega más campos según lo que necesites -->
<?php else: ?>
    <p>Usuario no encontrado.</p>
<?php endif; ?>
<?php include __DIR__ . '/../template/footer.php'; ?>