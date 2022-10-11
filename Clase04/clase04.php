<?php

	function Mensaje($nombre){
		echo "Bienvenido $nombre";
	}

	function SaltodeLinea(){
		echo "<br>";
	}

	function operaciones($ope,$n1,$n2){
		
		$resultado="";
		
		switch($ope){
			case "SUMA":
			    $resultado=$n1 + $n2;
				break;
			case "RESTA":
				$resultado=$n1 - $n2;
				break;
			case "MULTIPLICACION":
				$resultado=$n1 * $n2;
				break;
			case "DIVICION":
				if($n2===0){
					echo "NO SE PUEDE DIVIDIR ENTRE CERO";
				}else{
					$resultado=$n1 / $n2;
				}	
				break;	
			default:
				$resultado="NO SE ENCUENTRA LA OPERACION";
				break;
		}
		
		return $resultado;
	}
	
	Mensaje("Juan Carlos");
	echo "<br>";
	
	echo "SUMA " . operaciones("SUMA",15,20);
	SaltodeLinea();
	echo "RESTA " . operaciones("RESTA",15,20);
	SaltodeLinea();
	echo "MULTIPLICACION " . operaciones("MULTIPLICACION",15,20);
	SaltodeLinea();
	echo operaciones("DIVICION",15,0);
	
	

?>