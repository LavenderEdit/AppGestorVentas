<?php
namespace App\Models;

class Metodo_Pago extends BaseModel
{
    private int $id;
    private string $nombre;
    private string $descripcion;

    public function __construct(int $id, string $nombre, string $descripcion)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    // Métodos para procedimientos de almacenamientos
    public function crearMetodo_Pago($nombre, $descripcion)
    {
        return $this->callProcedure('crear', [$nombre, $descripcion]);
    }

    public function obtenerMetodos_Pagos()
    {
        return $this->callProcedure('visualizar', []);
    }

    public function obtenerMetodo_PagoPorId($id)
    {
        return $this->callProcedure('visualizar_por_id', [$id]);
    }

    //Getters y Setters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nombre;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }
}