<?php
	
	require_once "ClassOperacion.php";
	
	$objOperacion = new Calcular;
	
	echo $objOperacion->raizcuadrada(9);
	echo "<br/>";
	echo $objOperacion->Potencia(9,2);
	echo "<br/>";
	echo $objOperacion->op_basica(15,5,"+");
	echo "<br/>";
	echo $objOperacion->op_basica(15,5,"*");
	echo "<br/>";
	echo $objOperacion->op_basica(15,0,"/");
?>