<?php
namespace App\Controllers;

use App\Models\Usuarios;
use App\Core\Controller;

class UsuarioController extends Controller
{
    //Métodos para el crud API - REST
    public function index()
    {
        $usuarioModel = new Usuarios();
        $usuarios = $usuarioModel->obtenerUsuarios();
        $this->loadView("usuarios/index", ["usuarios" => $usuarios]);
    }

    public function create()
    {
        $this->loadView("usuarios/crear");
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $correo = $_POST['correo'] ?? '';
            $contrasenia = $_POST['contrasenia'] ?? '';
            $tipoUsuario = $_POST['tipo_id_usuario'] ?? 1;

            $usuarioModel = new Usuarios();
            $resultado = $usuarioModel->crearUsuario($nombre, $correo, $contrasenia, $tipoUsuario);

            header("Location: /usuarios");
            exit;
        }
    }

    public function show($id)
    {
        $usuarioModel = new Usuarios();
        $usuario = $usuarioModel->obtenerUsuarioPorId($id);

        if ($usuario) {
            $this->loadView("usuarios/ver", ["usuario" => $usuario]);
        } else {
            header("Location: /usuarios?error=Usuario no encontrado");
            exit;
        }
    }
}