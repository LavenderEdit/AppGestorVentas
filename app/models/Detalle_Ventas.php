<?php
namespace models;

class Detalle_Ventas
{
    private int $id_detalle;
    private int $cantidad;
    private float $precio_unitario;
    private float $subtotal;
    private int $id_venta;
    private int $id_producto;

    public function __construct(
        int $id_detalle = 0,
        int $cantidad = 0,
        float $precio_unitario = 0.0,
        float $subtotal = 0.0,
        int $id_venta = 0,
        int $id_producto = 0
    ) {
        $this->id_detalle = $id_detalle;
        $this->cantidad = $cantidad;
        $this->precio_unitario = $precio_unitario;
        $this->subtotal = $subtotal;
        $this->id_venta = $id_venta;
        $this->id_producto = $id_producto;
    }

    // Getters y Setters
    public function getIdDetalle(): int
    {
        return $this->id_detalle;
    }

    public function setIdDetalle(int $id_detalle): void
    {
        $this->id_detalle = $id_detalle;
    }

    public function getCantidad(): int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): void
    {
        $this->cantidad = $cantidad;
    }

    public function getPrecioUnitario(): float
    {
        return $this->precio_unitario;
    }

    public function setPrecioUnitario(float $precio_unitario): void
    {
        $this->precio_unitario = $precio_unitario;
    }

    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    public function setSubtotal(float $subtotal): void
    {
        $this->subtotal = $subtotal;
    }

    public function getIdVenta(): int
    {
        return $this->id_venta;
    }

    public function setIdVenta(int $id_venta): void
    {
        $this->id_venta = $id_venta;
    }

    public function getIdProducto(): int
    {
        return $this->id_producto;
    }

    public function setIdProducto(int $id_producto): void
    {
        $this->id_producto = $id_producto;
    }
}
