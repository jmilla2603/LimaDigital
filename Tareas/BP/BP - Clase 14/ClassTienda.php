<?php require_once "Productos.php";
require_once "Carrito.php";

class Tienda
{
  use Producto, Carrito;

  private float $fltSubtotal = 0;
  protected string $strInfo;

  public function getCarrito()
  {
    $this->fltSubtotal = $this->fltPrecio * $this->intCantidad;
    $this->strInfo = "
    <br/>
    Producto: $this->strProducto <br/>
    Precio: S/. " . number_format($this->fltPrecio, 2, ".", ",")  . "<br/>
    Cantidad: $this->intCantidad <br/>
    Subtotal: S/. " . number_format($this->fltSubtotal, 2, ".", ",") . "<br/>
    Total: S/. " .   number_format($this->fltSubtotal * 1.18, 2, ".", ",") . " <br/>
    ";

    return $this->strInfo;
  }
}
