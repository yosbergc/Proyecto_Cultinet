<?php

include "modelo/conexion_PJ.php";

$id = $_GET["id"];

$sql = $conexion_PJ->query(" select * from pagos_a_jornaleros where Nombre_del_jornalero='$id' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="../../../Favicon.png" href="../../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
    
<form class="col-4 p-3 m-auto" method="POST">

<h1 class="text-center alert alert-secondary">Modificar</h1>

<input type="hidden" name="id" value="<?= $_GET["id"] ?>">

<?php 
include "controlador/modificar_pj.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Nombre del  jornalero</label>
<input type="text" class="form-control" name="Nombre_del_jornalero" value="<?= $datos->Nombre_del_jornalero?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha de pago</label>
<input type="date" class="form-control" name="Fecha_de_pago" value="<?= $datos->Fecha_de_pago?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Hora y tarea trabajada</label>
<input type="text" class="form-control" name="Hora_y_tarea_trabajada" value="<?= $datos->Hora_y_tarea_trabajada?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Monto a pagar</label>
<input type="number" class="form-control" name="Monto_a_pagar" value="<?= $datos->Monto_a_pagar?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Metodo de pago</label>
<select class="form-control" name="Metodo_de_pago" value="<?= $datos->Metodo_de_pago?>">
			<option value="">Seleccione...</option>
			<option value="Efectivo">Efectivo</option>
			<option value="Transferencia">Transferencia</option>
			<option value="Pago_movil">Pago móvil</option>
		</select> 

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Comentario</label>
<input type="text" class="form-control" name="Comentario" value="<?= $datos->Comentario?>">

</div>

<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>