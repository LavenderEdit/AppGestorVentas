<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /auth/login.php");
    exit;
}

$page = isset($_GET['page']) ? $_GET['page'] : 'inicio';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
?>
<?php include __DIR__ . '/../includes/navbar.php'; ?>
<?php include __DIR__ . '/../template/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <?php include __DIR__ . '/../includes/sidebar.php'; ?>
        </nav>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <?php
            // Se construye la ruta a la vista
            $viewPath = __DIR__ . "/../app/views/" . $page . "/" . $action . ".php";
            if (file_exists($viewPath)) {
                include $viewPath;
            } else {
                echo "<h1 class='text-center mt-5'>Bienvenido al Dashboard</h1>";
            }
            ?>
        </main>
    </div>
</div>

<?php include __DIR__ . '/../template/footer.php'; ?>
<?php include __DIR__ . '/../includes/footerbar.php'; ?>