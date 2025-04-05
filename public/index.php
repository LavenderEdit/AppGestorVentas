<?php
require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_URL', '/GestorVentas/public');
date_default_timezone_set('America/Lima');

$router = new App\Core\Router();

require_once __DIR__ . '/../app/routes/web.php';

$router->dispatch();
?>