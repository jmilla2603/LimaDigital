<?php 

define("SALUD",0.1);
define("AFP",0.15);

// $error = [];

header('Content-Type: application/json; charset=utf-8');

$info = json_decode(file_get_contents("php://input"),true);

$empleado = $info["empleado"];
$numHoras = $info["horas"];
$tarifaHoras = $info["tarifa"];

$sueldoBruto = $numHoras * $tarifaHoras;

$descSalud = $sueldoBruto * SALUD;
$descAFP = $sueldoBruto * AFP;

$sueldoNeto = $sueldoBruto - $descSalud - $descAFP;


$data = [
  $empleado,
  $numHoras,
  $tarifaHoras,
  $sueldoBruto,
  $descSalud,
  $descAFP,
  $sueldoNeto
];



echo json_encode($data);