<?php
require_once("claseDocumento.php");

class Factura extends Documento
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

  /**
   * Get the value of forma_pago
   */
  public function getForma_pago()
  {
    return $this->forma_pago;
  }

  /**
   * Set the value of forma_pago
   *
   * @return  self
   */
  public function setForma_pago($forma_pago)
  {
    $this->forma_pago = $forma_pago;

    return $this;
  }

  /**
   * Get the value of subtotal
   */
  public function getSubtotal()
  {
    return $this->subtotal;
  }

  /**
   * Set the value of subtotal
   *
   * @return  self
   */
  public function setSubtotal($subtotal)
  {
    $this->subtotal = $subtotal;

    return $this;
  }

  /**
   * Get the value of igv
   */
  public function getIgv()
  {
    return $this->igv;
  }

  /**
   * Set the value of igv
   *
   * @return  self
   */
  public function setIgv($igv)
  {
    $this->igv = $igv;

    return $this;
  }

  /**
   * Get the value of total
   */
  public function getTotal()
  {
    return $this->total;
  }

  /**
   * Set the value of total
   *
   * @return  self
   */
  public function setTotal($total)
  {
    $this->total = $total;

    return $this;
  }

  public function imprimirDocumento(array $productos): string
  {
    $this->table .= "
    <table>
      <tr>
        <th>FACTURA: 0000010</th>
      </tr>
      <tr>
        <td>CLIENTE:</td><td>{$this->cliente}</td>
      </tr>
      <tr>
        <td>RUC:</td><td>{$this->ruc}</td>
      </tr>
      <tr>
        <td>TELÉFONO:</td><td>{$this->telefono}</td>
      </tr>
      <tr>
        <td>FORMA DE PAGO:</td><td>{$this->forma_pago}</td>
      </tr>
      <tr>
        <table>
          <tr>
            <th>DESCRIPCIÓN</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
          </tr>";

    $this->productos = $productos;
    $st = 0;
    $igv = 0.18;
    $importe_igv = 0;
    $total = 0;

    foreach ($this->productos as $producto) {
      $this->table .= "<tr>";
      $st += $producto["Precio"];

      foreach ($producto as $valor) {
        $this->table .= "
          <td align='" . (is_numeric($valor) ? 'center' : 'left') . "'>{$valor}</td>
        ";
      }

      $this->table .= "</tr>";
    }
    $importe_igv = number_format($st * $igv, 2, ".", ",");
    $total = number_format($st + $importe_igv, 2, ".", ",");

    $this->table .= "
          <tr>
            <td>&nbsp;</td>
            <td><strong>Subtotal:</strong></td>
            <td align='right'>{$st}</td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td><strong>I.G.V:</strong></td>
            <td align='right'>{$importe_igv}</td>
          </tr>

          <tr>
            <td>&nbsp;</td>
            <td><strong>Total:</strong></td>
            <td align='right'> {$total}</td>
        </tr>
        </table>
      </tr>
    </table>
    ";

    return $this->table;
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
