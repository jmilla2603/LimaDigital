<?php

	class Operacion{
		
		private int $num01;
		private $num02;
		
		public function __construct(){
			$this->num01=10;
			$this->num02=5;
		}
		
		public function Sumar():int{
			return $this->num01 + $this->num02;
		}
		
		public function setNum01($n1):void{
			$this->num01=$n1;
		}
		
		public function setNum02($n2){
			$this->num02=$n2;
		}
		
	}

	$operacion=new Operacion;
	//$operacion->num01=20;
	//$operacion->num02=10;
	$operacion->setNum01(20);
	$operacion->setNum02(10);
	echo $operacion->Sumar();
?>