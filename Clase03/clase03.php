<?php

	function Mensaje(){
		echo "Aprendiendo PHP desde cero.";
	}

	function operaciones(){
		$num1=5;
		$num2=10;
		$resultado=0;
		
		$resultado=$num1 + $num2;
		
		return $resultado;
	}
	
	Mensaje();
	
	echo "<pre>";
	echo operaciones();
	echo "</pre>";

?>