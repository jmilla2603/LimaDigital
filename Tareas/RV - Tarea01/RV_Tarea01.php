<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Ejercio 1 - Pago de Empleado</title>
</head>
<body>

  <h1 class="text-center my-5">PAGO DE EMPLEADO</h1>

  <div class="col-md-6 mx-auto">

    <form class="mb-3" id="formulario">
      <div class="mb-3 row">
        <label for="txtEmpleado" class="col-sm-4 col-form-label">Empleado</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="txtEmpleado" name="txtEmpleado2">
        </div>
      </div>
  
      <div class="mb-3 row">
        <label for="txtHoras" class="col-sm-4 col-form-label">Horas Trabajadas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="txtHoras" name="txtHoras" >
        </div>
      </div>
  
      <div class="mb-3 row">
        <label for="txtTarifa" class="col-sm-4 col-form-label">Tarifa por Horas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="txtTarifa" name="txtTarifa">
        </div>
      </div>
  
      <div class="mb-3 row">
        <div class="col-sm-8 offset-sm-4">
          <button class="btn btn-primary me-2" id="procesar">Procesar</button>
          <button class="btn btn-warning" id="clean">Limpiar</button>
        </div>
      </div>
    </form>

    <div class="mt-5">

      <div class="mb-3 row">
        <label for="empleado" class="col-sm-4 col-form-label">Empleado</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="empleado" readonly placeholder="">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="horas" class="col-sm-4 col-form-label">Horas Trabajadas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="horas" readonly placeholder="">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="tarifa" class="col-sm-4 col-form-label">Tarifa Horas</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="tarifa" readonly placeholder="$ 0.00">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="sueldoBruto" class="col-sm-4 col-form-label">Sueldo Bruto</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="sueldoBruto" readonly placeholder="$ 0.00">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="descSalud" class="col-sm-4 col-form-label">Descuento Salud</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="descSalud" readonly placeholder="$ 0.00">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="descAFP" class="col-sm-4 col-form-label">Descuento AFP</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="descAFP" readonly placeholder="$ 0.00">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="sueldoNeto" class="col-sm-4 col-form-label">Sueldo Neto</label>
        <div class="col-sm-8">
          <input type="text" class="form-control-plaintext" id="sueldoNeto" readonly placeholder="$ 0.00">
        </div>
      </div>

    </div>

  </div>
  

  <script type="module">

    const form = document.getElementById('formulario')

    const txtEmpleado = document.getElementById('txtEmpleado')
    const txtHoras = document.getElementById('txtHoras')
    const txtTarifa = document.getElementById('txtTarifa')
    
    const btnProcesar = document.getElementById('procesar')
    const btnClean = document.getElementById('clean')
    
    
    const resEmpleado = document.getElementById('empleado')
    const resHoras = document.getElementById('horas')
    const resTarifa = document.getElementById('tarifa')
    const sueldoBruto = document.getElementById('sueldoBruto')
    const descSalud = document.getElementById('descSalud')
    const descAFP = document.getElementById('descAFP')
    const sueldoNeto = document.getElementById('sueldoNeto')
    

    form.addEventListener('submit',async (e) => {
      e.preventDefault()

      const empleado = {
        "empleado": txtEmpleado.value,
        "horas": txtHoras.value,
        "tarifa": txtTarifa.value
      }

      const res = await fetch("RV_procesar.php",{
        method: "POST",
        headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
        },
        body: JSON.stringify(empleado)
      })
      
      const data = await res.json()

      resEmpleado.value = data[0]
      resHoras.value = data[1]
      resTarifa.value = data[2]
      sueldoBruto.value = data[3]
      descSalud.value = data[4]
      descAFP.value = data[5]
      sueldoNeto.value = data[6]

      cleanForm()
    })

    btnClean.addEventListener('click',() => {
      cleanForm()
      cleanAll()
    })

    function cleanForm() {
      txtEmpleado.value = "";
      txtHoras.value = "";
      txtTarifa.value = "";
    }

    function cleanAll() {
      resEmpleado.value = ""
      resHoras.value = ""
      resTarifa.value = ""
      sueldoBruto.value = ""
      descSalud.value = ""
      descAFP.value = ""
      sueldoNeto.value = ""
    }
  </script>
  
</body>
</html>