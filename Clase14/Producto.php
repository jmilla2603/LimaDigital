<?php

	trait Producto{
		
		protected string $strProducto;
		protected float $fltPrecio;
		protected int $intStock;
		
		public function setProducto(string $producto,float $precio,int $stock){
			$this->strProducto=$producto;
			$this->fltPrecio=$precio;
			$this->intStock=$stock;
		}
		
		public function getProducto():string{
			$strInfo="
					<br/>Producto: {$this->strProducto} <br/>
						 Precio: {$this->fltPrecio} <br/>
						 Stock: {$this->intStock}<br/>
			";
			
			return $strInfo;
		}
		
		public function setStock(int $cantidad){
			$this->intStock=$this->intStock - $cantidad;
		}
		
	}
	
?>