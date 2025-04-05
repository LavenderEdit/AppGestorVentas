<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Usuarios;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $this->loadView('auth/login');
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $usuario = (new Usuarios())->autenticarUsuario($email, $password);

            if ($usuario) {
                $_SESSION['usuario'] = $usuario;
                header("Location: " . BASE_URL . "/dashboard");
                exit;
            } else {
                $_SESSION['error_login'] = "Credenciales incorrectas";
                header("Location: " . BASE_URL . "/login");
                exit;
            }
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: " . BASE_URL);
        exit;
    }
}