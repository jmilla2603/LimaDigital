<?php
	session_start();
	//session_unset();
	//session_destroy();

	if(!empty($_SESSION['PL']) || !empty($_SESSION['FP'])){
		echo "Conteo de Perú Libre: " . $_SESSION['PL'];
		echo "<br/>";
		echo "Conteo de Fuerza Popular: " . $_SESSION['FP'];
	}	

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>.:: Votaciones 2021 ::.</title>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Poppins:wght@500&display=swap" rel="stylesheet">
		<link href="style.css" rel="stylesheet">
	</head>
	<script>
		/*
		if(window.history.replaceState){ // verificamos el estado de actualización
			window.history.replaceState(null,null,window.location.href);
		}
		*/
	</script>
	<body>
		<header>
			<div class="titulo">ELECCIONES GENERALES 2021</div>
		</header>
		<form method="post" action="conteo.php">
		<section>
		
		  <div class="contenedor">
			<div class="partido">
				<img src="candidatos/2218.jpg">
				<span>PERU LIBRE</span>
			</div>
			<article>
				<img src="candidatos/27427864.jpg">
				<span class="candidato">JOSE PEDRO CASTILLO TERRONES</span>
				<span class="eleccion">Presidencia</span>
			</article>
			<button name="btnPL" value="1">VOTAR</button>
		  </div>
		  <div class="contenedor">
			<div class="partido">
				<img src="candidatos/1366.jpg">
				<span>FUERZA POPULAR</span>
			</div>
			<article>
				<img src="candidatos/10001088.jpg">
				<span class="candidato">KEIKO SOFIA FUJIMORI HIGUCHI</span>
				<span class="eleccion">Presidencia</span>
			</article>
			<button name="btnFP" value="1">VOTAR</button>
		  </div>
		 
		</section>
		</form>
		<footer>
                © JCM. Todos los Derechos Reservados 2021
        </footer>
	</body>
</html>