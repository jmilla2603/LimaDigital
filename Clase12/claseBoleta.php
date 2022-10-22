<!-- Tarea para la casita -->
<?php
require_once("claseDocumento.php");

class Boleta extends Documento
{
  private string $forma_pago;
  private float $subtotal;
  private float $igv;
  private float $total;
  private array $productos;
  private string $table = "";
  private string $msj = "";

  function __construct(string $cliente, string $fecha, string $ruc, string $telefono, string $fpago, float $subtotal, float $igv, float $total)
  {
    parent::__construct($cliente, $fecha, $ruc, $telefono);
    $this->forma_pago = $fpago;
    $this->subtotal = $subtotal;
    $this->igv = $igv;
    $this->total = $total;
  }

  public function getMensaje(): string
  {
    return $this->msj;
  }

  public function setMensaje(string $msj): void
  {
    $this->msj = $msj;
  }
}

?>