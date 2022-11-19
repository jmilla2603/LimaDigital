<?php require_once "models/products.php";

class productoController
{
  protected array $lista_productos;

  function __construct()
  {
    $productos = new Products;
    $this->lista_productos = $productos->ListaProductos();
  }

  public function getProductos(): array
  {
    return $this->lista_productos;
  }

  public function searchProduct(int $id): array
  {
    $productos = $this->getProductos();
    return array_merge(...array_filter($productos, fn ($prod): bool => $prod["codigo"] == $id));
  }
}
