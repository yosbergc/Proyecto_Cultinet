<?php

include "modelo/conexion_CS.php";

$id = $_GET["id"];

$sql = $conexion_CS->query(" select * from control_y_seguimiento where identificador_de_siembra='$id' ");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="../../Favicon.png" href="../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
    
<form class="col-4 p-3 m-auto" method="POST">

<h1 class="text-center alert alert-secondary">Modificar</h1>

<input type="hidden" name="id" value="<?= $_GET["id"] ?>">

<?php 
include "controlador/modificar_CS.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Identificador de siembra</label>
<input type="text" class="form-control" name="identificador_de_siembra" value="<?= $datos->identificador_de_siembra?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Tipo de platano</label>
<input type="text" class="form-control" name="tipo_de_platano" value="<?= $datos->tipo_de_platano?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha</label>
<input type="date" class="form-control" name="fecha" value="<?= $datos->fecha?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Comentario</label>
<input type="text" class="form-control" name="comentario" value="<?= $datos->comentario?>">

</div>

<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>