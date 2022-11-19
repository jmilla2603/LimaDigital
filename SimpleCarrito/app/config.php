<?php

define("PORT", "81");

function mensajeUsuario($status = 200, $msj = '', $data = [])
{
	http_response_code($status);
	$response = array(
		"status" => $status,
		"message" => $msj,
		"data" => $data
	);
	return json_encode($response);
}

function formato_moneda($valor, $tm = 0)
{
	$simb = "";

	if (!is_float($valor) && !is_integer($valor)) $valor = 0;

	if ($tm == 0) $simb = "S/.";
	else if ($tm == 1) "$";


	return $simb . " " . number_format($valor, 2, ".", ",");
}

function render_view($view, $data = [])
{
	if (!is_file("views/" . $view . ".php")) echo "La vista no existe " . $view;
	else require_once("views/" . $view . ".php");
}
