<?php include __DIR__ . '/../template/header.php'; ?>
<h2>Listado de Usuarios</h2>
<ul>
    <?php foreach ($usuarios as $usuario): ?>
        <li>
            <?php echo $usuario['nombre']; ?> - <?php echo $usuario['correo']; ?>
            <a href="/dashboard.php?page=usuarios&action=view&id=<?php echo $usuario['id_usuario']; ?>">Ver</a>
        </li>
    <?php endforeach; ?>
</ul>
<?php include __DIR__ . '/../template/footer.php'; ?>