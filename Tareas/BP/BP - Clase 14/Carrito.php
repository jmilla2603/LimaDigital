<?php trait Carrito
{
  protected string $strProducto;
  protected $intCantidad;

  public function setCarrito(string $producto, int $cantidad)
  {
    $this->strProducto = $producto;
    $this->intCantidad = $cantidad;
  }

  abstract public function getCarrito();
}
