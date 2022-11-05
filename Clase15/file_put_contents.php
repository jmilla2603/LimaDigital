<?php

	// file_put_contents => Permite añadir información a un archivo
	// file_put_contents($nombre_archivo,'elemento_agregar'
	
	$archivo='carrito.txt';
	
	echo "Los productos del carrito son : <br/>";
	
	// =========================================
	  listar($archivo);
	// =========================================
	echo "<br/>";
	// Leer el archivo
	$lista_productos=file_get_contents($archivo);
	
	$lista_productos.="Tostadora-120-10";
	
	// Agregando datos a mi archivo
	
	file_put_contents($archivo,$lista_productos);
	
	print_r($lista_productos);
	
	function listar($archivo){
		$abrir=fopen($archivo,'r');
		while(($producto=fgets($abrir,filesize($archivo)))!==false){
			echo $producto. "<br/>";
		}
		fclose($abrir);
	}
	
?>