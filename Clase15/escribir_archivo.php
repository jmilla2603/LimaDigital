<?php

	// fwrite => Permitir escribir en un archivo
	// previamente abierto
	
	// fwrite($archivo_abierto,'contenido');
	
	// Caso:
	// registrar los siguientes productos dentro de carrito.txt
	
	// Lavadora			1500	20
	// Televisor 65' 	3500	30
	// Refrigeradora	1650	10
	
	// Abrir archivo
	$archivo='carrito.txt';
	$abrir=fopen($archivo,"w");
	// Productos
	$producto1="Lavadora-1500-20" . chr(13). chr(10);
	$producto2="Televisor 65'-3500-30" . chr(13). chr(10);
	$producto3="Refrigeradora-1650-10" . chr(13). chr(10);
	
	// Escribir en al archivo
	/*
	fwrite($abrir,$producto1);
	fwrite($abrir,$producto2);
	fwrite($abrir,$producto3);
	*/
	fputs($abrir,$producto1);
	fputs($abrir,$producto2);
	fputs($abrir,$producto3);
	// Cerrar el archivo
	fclose($abrir);
	
	echo "Se escribio correctamente el archivo " . chr(64);
	
	
	
?>