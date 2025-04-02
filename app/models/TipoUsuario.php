<?php
namespace models;

class TipoUsuario extends BaseModel
{
    public function __construct(int $id = 0, string $nombre = '', ?string $descripcion = null)
    {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setDescripcion($descripcion);
    }

    public function getDisplayName(): string
    {
        return strtoupper($this->nombre);
    }
}
