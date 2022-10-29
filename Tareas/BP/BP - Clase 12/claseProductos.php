<?php

class Products
{
  private $lista_productos;

  function __construct()
  {
    $this->lista_productos = null;
  }

  public function ListarProductos(): array
  {
    return $this->lista_productos =
      array(
        array(
          "Descripcion" => "Billetera",
          "Precio" => "15.00",
          "Cantidad" => "7"
        ),
        array(
          "Descripcion" => "Mochila",
          "Precio" => "45.80",
          "Cantidad" => "2"
        ),
        array(
          "Descripcion" => "Libro - PHP",
          "Precio" => "65.00",
          "Cantidad" => "3"
        )
      );
  }
}
