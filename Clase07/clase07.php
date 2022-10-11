<?php

	//POO - Programación Orientada a Objetos
	
	// Clase - > Objeto -> Cliente
	
	// Clase -> Propiedades - Métodos
	
	class Operacion{
		// private - public - protected = encapsulamiento(propiedades y métodos)
		private $num1=0;
		private $num2=0;
		/*
		function Operacion($n1,$n2){
			$this->num1=$n1;
			$this->num2=$n2;
		}
		*/
		function __construct($n1,$n2){
			$this->num1=$n1;
			$this->num2=$n2;
		}
		
		public function getNumeros(){
			return $this->num1;
		}
		
		public function Suma(){
			return $this->num1 + $this->num2;
		}
		
	}
	
	$objOperacion=new Operacion(15,5);
	
	echo $objOperacion->getNumeros();
	
	echo "<br>";
	
	echo $objOperacion->Suma();
	
	
?>