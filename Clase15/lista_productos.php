<?php
	$archivo='carrito.txt';
	$productos=fopen($archivo,'r');
	
	$leer=fread($productos,filesize($archivo));
	
	// Obtener líneas de registros productos
	$linea=explode(chr(13) . chr(10),$leer);
	
	echo "LISTA DE PRODUCTOS";
	echo "<hr>";
	
	for($i=0;$i<count($linea)-1;$i++){
		$contenido=explode('-',$linea[$i]);
		echo $contenido[0] . " ";
		echo $contenido[1] . " ";
		echo $contenido[2]. '<br/>';
	}

?>