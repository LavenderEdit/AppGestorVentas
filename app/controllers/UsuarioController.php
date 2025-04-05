<?php
namespace Controllers;

use Models\Usuarios;
use Core\Controller;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarioModel = new Usuarios();
        $usuarios = $usuarioModel->obtenerUsuarios();

        $this->loadView("usuarios/index", ["usuarios" => $usuarios]);
    }

    public function crear()
    {
        $this->loadView("usuarios/crear");
    }

    public function guardar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $contrasenia = $_POST['contrasenia'] ?? '';
            $tipoUsuario = $_POST['tipo_id_usuario'] ?? 1;

            $usuarioModel = new Usuarios();
            $resultado = $usuarioModel->crearUsuario($nombre, $correo, $contrasenia, $tipoUsuario);

            header("Location: /dashboard.php?page=usuarios&action=index");
            exit;
        }
    }

    public function buscar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id = $_GET['id'];
            $usuarioModel = new Usuarios();
            $usuario = $usuarioModel->obtenerUsuarioPorId($id);

            if ($usuario) {
                $this->loadView("usuarios/view", ["usuario" => $usuario]);
            } else {
                header("Location: /dashboard.php?page=usuarios&action=index&error=Usuario no encontrado");
                exit;
            }
        } else {
            $this->loadView("usuarios/buscar");
        }
    }

    public function login()
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = $_POST['correo'] ?? '';
            $contrasenia = $_POST['contrasenia'] ?? '';

            if (empty($correo) || empty($contrasenia)) {
                $_SESSION['error'] = "Correo y contraseña son obligatorios.";
                header("Location: /../auth/login.php");
                exit;
            }

            $usuarioModel = new Usuarios();
            $usuario = $usuarioModel->autenticarUsuario($correo, $contrasenia);

            if ($usuario) {
                $_SESSION['usuario'] = [
                    'id' => $usuario['id_usuario'],
                    'nombre' => $usuario['nombre'],
                    'correo' => $usuario['correo'],
                    'tipo' => $usuario['tipo_id_usuario'],
                    'avatar' => $usuario['avatar_id_usuario']
                ];
                header("Location: /dashboard.php");
                exit;
            } else {
                $_SESSION['error'] = "Credenciales incorrectas.";
                header("Location: /login.php");
                exit;
            }
        } else {
            $this->loadView("auth/login");
        }
    }


    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: /login.php");
        exit;
    }
}
