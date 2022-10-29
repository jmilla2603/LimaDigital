<?php

	require_once "Producto.php";
	require_once "Carrito.php";
	
	class Tienda {
			
		use Producto,Carrito;
		
		private float $fltSubtotal = 0;
		private float $fltIgv = 0;
		private float $fltTotal = 0;
		
		public function getCarrito(){
			$this->fltSubtotal= $this->fltPrecio * $this->intCantidad;
			$this->fltTotal=$this->fltSubtotal * 1.18;
			
			$strInfo="
					<br/>Producto: {$this->strProducto} <br/>
					     Precio: S/ {$this->fltPrecio} <br/>		
						 Cantidad: {$this->intCantidad}<br/>
						 Subtotal: S/ " . number_format($this->fltSubtotal,2,".",",") . " <br/>
						 Total: S/ " . number_format($this->fltTotal,2,'.',',') . "<br/>";
						 
			return $strInfo;
		}
		
	}

?>