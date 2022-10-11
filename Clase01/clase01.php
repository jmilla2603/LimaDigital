<?php

	$dias=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
	// indice de un array empieza en 0 - #FINAL
	//print_r($dias);
	
	//echo count($dias);
	/*
	for($i=0;$i<count($dias);$i++){
		echo "<br>" . $dias[$i] . "<br>";
	}
	*/
	
	foreach($dias as $elementos){
		echo $elementos . "<br>";
	}
?>