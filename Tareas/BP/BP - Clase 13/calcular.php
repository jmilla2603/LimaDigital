<?php

require_once "ClassCalcular.php";

$objOperacion = new Calcular;

echo $objOperacion->raizCuadrada(9);
echo "<br />";
echo $objOperacion->Potencia(9, 2);
echo "<br />";
echo $objOperacion->op_basica(4, 3, "+");
echo "<br />";
echo $objOperacion->op_basica(15, 5, "*");
echo "<br />";
echo $objOperacion->op_basica(15, 0, "/");
