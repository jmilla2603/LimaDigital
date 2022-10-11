<?php

	require_once "datos.php";

	//SaltodeLinea2(DatosPersonas());
	
	//Ejemplo de array anidado;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>.:: Lima digital ::.</title>
	</head>
	<style>
		table{
			border:2px;
			margin: 0px auto;
		}
		
		th{
			font-family:arial,verdana;
			font-size:12px;
			color:darkred;
		}
		td{
			font-family:verdana;
			font-size:12px;
		}
		aside{
			float: left;
			width: 30%
		}
		#titulo{
			font-size:20px;
		}
	</style>
	<body>
		<section>
			<table width="500" border="1" cellspacing="0" cellpadding="7">
			 <tr><th colspan="5" id="titulo">LISTA DE PERSONAS</th></tr>
			 <tr>
				 <th>NOMBRES</th>
				 <th>APELLIDOS</th>
				 <th>EDAD</th>
				 <th>FECHA NACIMIENTO</th>
			 </tr>
			 <?php
			 
			    $elementos=ListarPersonas();
				$contador=0;
				
				foreach($elementos as $elemento){
					
					foreach($elemento as $indice=>$valor){
						
						echo "<td>" . $valor . "</td><tr>";
					}
				}
			 ?>
			</table>
		</section>	
	</body>

</html>