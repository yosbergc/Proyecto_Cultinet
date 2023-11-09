<?php

include "modelo/conexion_ING.php";

$id = $_GET["id"];

$sql = $conexion_ING->query(" select * from ingresos where Cliente='$id' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
    
<form class="col-4 p-3 m-auto" method="POST">

<h1 class="text-center alert alert-secondary">Modificar</h1>

<input type="hidden" name="id" value="<?= $_GET["id"] ?>">

<?php 
include "controlador/modificar_ing.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Cliente</label>
<input type="text" class="form-control" name="Cliente" value="<?= $datos->Cliente?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Peso en kg</label>
<input type="number" class="form-control" name="Peso_en_kg" value="<?= $datos->Peso_en_kg?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Precio de venta por kg</label>
<input type="text" class="form-control" name="Precio_de_venta_por_kg" value="<?= $datos->Precio_de_venta_por_kg?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Total de ingresos</label>
<input type="text" class="form-control" name="Total_de_ingresos" value="<?= $datos->Total_de_ingresos?>">

</div>


<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>