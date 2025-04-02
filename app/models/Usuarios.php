<?php
namespace models;

class Usuarios
{
    private int $id_usuario;
    private string $nombre;
    private string $correo;
    private string $contrasenia;
    private int $tipo_id_usuario;
    private int $avatar_id_usuario;

    public function __construct(
        int $id_usuario = 0,
        string $nombre = '',
        string $correo = '',
        string $contrasenia = '',
        int $tipo_id_usuario = 0,
        int $avatar_id_usuario = 0
    ) {
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contrasenia = $contrasenia;
        $this->tipo_id_usuario = $tipo_id_usuario;
        $this->avatar_id_usuario = $avatar_id_usuario;
    }

    // Métodos para hashear y verificar la contraseña
    public static function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function verifyPassword(string $password, string $hashedPassword): bool
    {
        return password_verify($password, $hashedPassword);
    }

    // Getters y Setters
    public function getIdUsuario(): int
    {
        return $this->id_usuario;
    }

    public function setIdUsuario(int $id_usuario): void
    {
        $this->id_usuario = $id_usuario;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getCorreo(): string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): void
    {
        $this->correo = $correo;
    }

    public function getContrasenia(): string
    {
        return $this->contrasenia;
    }

    public function setContrasenia(string $contrasenia): void
    {
        $this->contrasenia = $contrasenia;
    }

    public function getTipoIdUsuario(): int
    {
        return $this->tipo_id_usuario;
    }

    public function setTipoIdUsuario(int $tipo_id_usuario): void
    {
        $this->tipo_id_usuario = $tipo_id_usuario;
    }

    public function getAvatarIdUsuario(): int
    {
        return $this->avatar_id_usuario;
    }

    public function setAvatarIdUsuario(int $avatar_id_usuario): void
    {
        $this->avatar_id_usuario = $avatar_id_usuario;
    }
}
