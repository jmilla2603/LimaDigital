<?php
trait Producto
{
  protected string $strProducto;
  protected float $fltPrecio;
  protected int $intStock;
  protected string $strInfo;

  public function setProducto(string $producto, float $precio, int $stock)
  {
    $this->strProducto = $producto;
    $this->fltPrecio = $precio;
    $this->intStock = $stock;
  }

  public function getProducto(): string
  {
    $this->strInfo = "
      <br/>
      Producto: $this->strProducto <br/>
      Precio: $this->fltPrecio <br/>
      Stock: $this->intStock <br/>
    ";
    return $this->strInfo;
  }

  public function setStock(int $cantidad)
  {
    $this->intStock -= $cantidad;
  }
}
