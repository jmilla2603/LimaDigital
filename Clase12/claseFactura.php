<?php

require_once "claseDocumento.php";

class Factura extends Documento
{
  private string $forma_pago;
  private float $subtotal;
  private float $igv;
  private float $total;
  private array $productos;
  private string $table = "";
  private string $msj = "";

  function __construct(string $cli, string $fecha, String $ruc, string $telefono, string $fpago, float $subtotal, float $igv, float $total)
  {
    parent::__construct($cli, $fecha, $ruc, $telefono);
    $this->forma_pago = $fpago;
    $this->subtotal = $subtotal;
    $this->igv = $igv;
    $this->total = $total;
  }

  public function ImprimirDocumento(array $productos): string
  {

    $this->table .= "<table>
        <tr>
            <th>FACTURA: 000010</th>
        </tr>
        <tr>
            <td>CLIENTE:</td><td>{$this->cliente}</td>
        </tr>
        <tr>
            <td>RUC:</td><td>{$this->ruc}</td>
        </tr>
        <tr>
            <td>TELEFONO:</td><td>{$this->telefono}</td>
        </tr>
        <tr>
            <td>FORMA DE PAGO:</td><td>" . $this->forma_pago . "</td>
        </tr>
        <tr>
            <table>
                <tr>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                </tr>";

    $this->productos = $productos;

    $st = 0;

    $p_igv = 0.18;
    $importe_igv = 0;
    $total = 0;

    foreach ($this->productos as $producto) {
      $this->table .= "<tr>";
      $st += $producto["Precio"];
      foreach ($producto as $valor) {
        $this->table .= "<td align='" . (is_numeric($valor) ? 'center' : 'left') . "'>{$valor}</td>";
      }
      $this->table .= "</tr>";
    }

    $importe_igv = number_format($st * $p_igv, 2, ".", ",");
    $total = number_format($st + $importe_igv, 2, ".", ",");
    $this->table .= "
                <tr>
                    <td>&nbsp;</td>
                    <td><strong>Subtotal:</strong></td>
                    <td align='right'>{$st}</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><strong>I.G.V.:</strong></td>
                    <td align='right'>{$importe_igv}</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><strong>Total:</strong></td>
                    <td align='right'>{$total}</td>
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
