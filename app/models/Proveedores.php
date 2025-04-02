<?php
namespace models;

class Proveedores
{
    private int $id_proveedor;
    private string $nombre;
    private string $email;
    private string $telefono;
    private string $direccion;

    public function __construct(
        int $id_proveedor = 0,
        string $nombre = '',
        string $email = '',
        string $telefono = '',
        string $direccion = ''
    ) {
        $this->id_proveedor = $id_proveedor;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    // Getters y Setters
    public function getIdProveedor(): int
    {
        return $this->id_proveedor;
    }

    public function setIdProveedor(int $id_proveedor): void
    {
        $this->id_proveedor = $id_proveedor;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getDireccion(): string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void
    {
        $this->direccion = $direccion;
    }
}