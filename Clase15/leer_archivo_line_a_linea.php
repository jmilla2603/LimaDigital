<?php
	date_default_timezone_set('America/Lima');
	// fgets => Permite leer linea a linea un archivo
	// previamente abierto.
	// fgets($archivo_abierto,tamaño_archivo)
	// OBS: usa fpen, filesize
	
	// abrir archivo
	$archivo='carrito.txt';
	$abrir=fopen($archivo,'r');
	// Imprimir el contenido del archivo
	echo "Los productos son: <br/>";
	
	while(($producto=fgets($abrir,filesize($archivo)))!==false){
		echo $producto . '<br/>';
	}
	
	fclose($abrir);
	echo "Fecha y hora actual: " . date("d-m-Y H:i:s") . "<br/>";
	echo "Fecha y hora de modificación del archivo: " . 
	date("F d Y h:i:s.",filectime($archivo));
	
?>