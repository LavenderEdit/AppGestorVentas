<?php
use App\Core\Router;

$router = new Router();

// Inicio
$router->get('/', 'App\Controllers\HomeController@index');

// Autenticación
$router->get('/login', 'App\Controllers\AuthController@showLoginForm');
$router->post('/login', 'App\Controllers\AuthController@login');
$router->get('/logout', 'App\Controllers\AuthController@logout');

// Dashboard
$router->get('/dashboard', 'DashboardController@index');

// Gestión de usuarios
$router->get('/usuarios', 'App\Controllers\UsuarioController@index');
$router->get('/usuarios/crear', 'App\Controllers\UsuarioController@create');
$router->post('/usuarios', 'App\Controllers\UsuarioController@store');
$router->get('/usuarios/{id}', 'App\Controllers\UsuarioController@show');

$router->dispatch();