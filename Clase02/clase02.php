<?php

	// $dias=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
	
	// Array Asociativo
	
	$ventas=array("Lunes"=>1500,
				  "Martes"=>580,
				  "Miercoles"=>970,
				  "Jueves"=>450,
				  "Viernes"=>658,
				  "Sabado"=>258,
				  "Domingo"=>150);
	
	$total=0;
	
	foreach($ventas as $indice => $valor){
		echo "La venta para el d&iacute;a " . $indice . " es : " . $valor . "<br>";
		//$total+=$valor;
		$total=$total + $valor;
	}

	echo "Total Ventas en la semana: " . $total;
?>