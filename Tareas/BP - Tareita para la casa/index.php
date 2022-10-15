<?php

include_once("Empleado.php");
$empleado = new Empleado();
$txt_empleado = (isset($_REQUEST['txt_empleado']) ? $_REQUEST['txt_empleado'] : '');
$txt_horas = floatval(isset($_REQUEST['txt_horas']) ? $_REQUEST['txt_horas'] : 0);
$txt_tarifa = floatval(isset($_REQUEST['txt_tarifa']) ? $_REQUEST['txt_tarifa'] : 0);

if (isset($_REQUEST['Procesar'])) {
  $empleado->setNombreEmpleado($txt_empleado);
  $empleado->setHorasTrabajadas($txt_horas);
  $empleado->setTarifaHora($txt_tarifa);
} else {
  $empleado->setNombreEmpleado("");
  $empleado->setHorasTrabajadas(0);
  $empleado->setTarifaHora(0);
} ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Empleado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <script defer src="script.js"></script>
</head>

<body>
  <div class="container bg-grey vh-50 py-5 d-flex justify-content-center align-items-center">
    <form class="form-control w-100 px-5 pt-2 pb-5" id="formulario" action="index.php" method="post">
      <div class="mb-3">
        <h1 class="text-center mt-4 mb-5">PAGO DEL EMPLEADO <?php echo $empleado->getNombreEmpleado(); ?></h1>
        <label for="txt_empleado" class="form-label">Empleado</label>
        <input type="text" class="form-control" id="txt_empleado" name="txt_empleado" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="txt_horas" class="form-label">Horas trabajadas</label>
        <input type="number" class="form-control" id="txt_horas" name="txt_horas" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="txt_tarifa" class="form-label">Tarifa por Horas</label>
        <input type="number" class="form-control" id="txt_tarifa" name="txt_tarifa" aria-describedby="emailHelp" />
      </div>

      <input type="submit" name="Procesar" class="btn btn-primary" value="Procesar" />
      <input type="reset" class="btn btn-secondary" name="Limpiar" value="Limpiar" />
    </form>
  </div>

  <div class="container">
    <div class="d-flex gap-1">
      <p class="text fw-bold"> Nombre del trabajador: </p>
      <p class="des"><?php echo $empleado->getNombreEmpleado(); ?></p>
    </div>
    <div class="d-flex gap-1">
      <p class="text fw-bold"> Horas trabajadas: </p>
      <p class="des"><?php echo $empleado->getHorasTrabajadas(); ?></p>
    </div>
    <div class="d-flex gap-1">
      <p class="text fw-bold"> Tarifa: </p>
      <p class="des"><?php echo "S/." . number_format((float)$empleado->getTarifaHora(), 2, ".", ""); ?></p>
    </div>
    <div class="d-flex gap-1">
      <p class="text fw-bold"> Sueldo Bruto: </p>
      <p class="des"><?php echo "S/." . number_format((float)$empleado->getSueldoBruto(), 2, ".", ""); ?></p>
    </div>

    <div class="d-flex gap-1 ">
      <p class="text fw-bold"> Descuento Salud: </p>
      <p class="des"><?php echo "S/." . number_format((float)$empleado->getDescSalud(), 2, ".", ""); ?></p>
    </div>

    <div class="d-flex gap-1 ">
      <p class="text fw-bold"> Descuento AFP: </p>
      <p class="des"><?php echo "S/." . number_format((float)$empleado->getDescAFP(), 2, ".", ""); ?></p>
    </div>

    <div class="d-flex gap-1 ">
      <p class="text fw-bold"> Sueldo Neto: </p>
      <p class="des"><?php echo "S/." . number_format((float)$empleado->getSueldoNeto(), 2, ".", ""); ?></p>
    </div>
  </div>
</body>

</html>