<?php
// Ejemplo muy básico de rutas
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        require_once '../public/index.php';
        break;
    case '/login':
        require_once '../app/controllers/UsuarioController.php';
        $controller = new \Controllers\UsuarioController();
        $controller->login();
        break;
    // Agrega más rutas según sea necesario
    default:
        echo "404 Not Found";
        break;
}
