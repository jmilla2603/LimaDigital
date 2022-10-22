<?php 
    require_once("empleado.php");

    $afp = 0.12;
    $salud = 0.08;
    
    if(isset($_POST["procesar"])){
        $nombre = $_POST["empleado"];
        $horas = $_POST["horas"];
        $tarifa = $_POST["tarifa"];
        $empleado = new Empleado($nombre, $horas, $tarifa);

        $sueldoBruto = $empleado->calcularSueldoBruto();
        $sueldoNeto = $empleado->calcularSueldoNeto($afp, $salud);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>
    <div class="container white" style="min-height: 100vh; padding: 20px">
        <div class="row">
            <div class="col s6">
                <div class="card">
                    <div class="card-content">
                        <form action="index.php" method="POST">
                            <span class="card-title">Pago de empleado</span>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="empleado" name="empleado" type="text" class="validate">
                                    <label for="empleado">Empleado</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="horas" name="horas" type="number" min="0" class="validate">
                                    <label for="horas">Horas Trabajador</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="tarifa" name="tarifa" type="number" min="0" class="validate">
                                    <label for="tarifa">Tarifas por Horas</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <button class="btn waves-effect waves-light" type="submit" name="procesar">Procesar</button>
                                    <button class="btn waves-effect waves-light" type="reset" name="limpiar">Limpiar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
            <div class="col s6">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Información</span>
                        <table>
                            <tbody class="striped">
                                <tr>
                                    <td>Empleado </td>
                                    <?php if(isset($nombre)): ?>
                                        <td><?=$nombre ?></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td>Horas Trabajadas: </td>
                                    <?php if(isset($horas)): ?>
                                        <td><?=$horas ?> horas</td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td>Tarifa por hora: </td>
                                    <?php if(isset($tarifa)): ?>
                                        <td>$ <?=$tarifa ?></td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td>Sueldo Bruto: </td>
                                    <?php if(isset($sueldoBruto)): ?>
                                        <td>$ <?=$sueldoBruto ?></td>
                                    <?php endif; ?>
                                <tr/>
                                <tr>
                                    <td>Descuento Salud: </td>
                                    <?php if(isset($sueldoBruto)): ?>
                                        <td>$ <?=$salud*$sueldoBruto ?></td>
                                    <?php endif; ?>
                                <tr/>
                                <tr>
                                    <td>Descuento AFP: </td>
                                    <?php if(isset($sueldoBruto)): ?>
                                        <td>$ <?=$afp*$sueldoBruto ?></td>
                                    <?php endif; ?>
                                <tr/>
                                <tr>
                                    <td>Sueldo Neto: </td>
                                    <?php if(isset($sueldoNeto)): ?>
                                        <td>$ <?=$sueldoNeto ?></td>
                                    <?php endif; ?>
                                <tr/>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>