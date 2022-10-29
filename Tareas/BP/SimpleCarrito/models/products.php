<?php

class Products
{
  private $lista_productos;

  function __construct()
  {
    $this->lista_productos = null;
  }

  public function infoData(array $elementos): void
  {
    echo "<pre>";
    print_r($elementos);
    echo "</pre>";
  }

  public function ListaProductos(): array
  {
    $this->lista_productos = array(
      array(
        'codigo' => '7613035724518',
        'nombre' => 'Paneton Donofrio bolsa',
        'imagen' => 'paneton-donofrio-en-bolsa-900.jpg',
        'precio' => 25.50
      ),
      array(
        'codigo' => '7751271021579',
        'nombre' => 'Leche Gloria 400 gr',
        'imagen' => 'gloria-evaporada-entera-400-gr.jpg',
        'precio' => 4.20
      ),
      array(
        'codigo' => '7750151012447',
        'nombre' => 'Queso Cheddar Laive 170 gr',
        'imagen' => 'queso-cheddar-170.jpg',
        'precio' => 5.30
      ),
      array(
        'codigo' => '7750151005548',
        'nombre' => 'Yogurt Gloria Fresa 340 ml',
        'imagen' => 'yogurt-fresa-gloria-1kg.jpg',
        'precio' => 12.50
      ),
      array(
        'codigo' => '7750151003902',
        'nombre' => 'Mermelada Fanny 1k',
        'imagen' => 'mermelada-fanny-1k.jpg',
        'precio' => 61.50
      ),
      array(
        'codigo' => '7750243069946',
        'nombre' => 'Detergente Bolivar 3.8 kg',
        'imagen' => 'detergente-bolivar-3-8k.jpg',
        'precio' => 35.80
      )
    );

    return $this->lista_productos;
  }
}
