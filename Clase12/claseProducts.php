<?php
class Products
{
  private array $lista_productos;

  function __construct()
  {
    $this->lista_productos = [];
  }


  public function listarProductos(): array
  {
    return $this->lista_productos = [
      [
        "Description" => "Billetera",
        "Precio" => "15.00",
        "Cantidad" => "2",
      ],
      [
        "Description" => "Mochila",
        "Precio" => "45.00",
        "Cantidad" => "1",
      ],
      [
        "Description" => "Libro - PHP",
        "Precio" => "65.00",
        "Cantidad" => "1",
      ],
    ];
  }

  /**
   * Get the value of lista_productos
   */
  public function getLista_productos()
  {
    return $this->lista_productos;
  }

  /**
   * Set the value of lista_productos
   *
   * @return  self
   */
  public function setLista_productos($lista_productos)
  {
    $this->lista_productos = $lista_productos;

    return $this;
  }
}
