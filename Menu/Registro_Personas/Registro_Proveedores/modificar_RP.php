<?php

include "modelo/conexion_RP.php";

$id = $_GET["id"];

$sql = $conexion_RP->query(" select * from registro_de_proveedor where Nombre_empresa_proveedor='$id' ");


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
include "controlador/modificar_rp.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Nombre de empresa o proveedor</label>
<input type="text" class="form-control" name="Nombre_empresa_proveedor" value="<?= $datos->Nombre_empresa_proveedor?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Nombre representante</label>
<input type="text" class="form-control" name="Nombre_representante" value="<?= $datos->Nombre_representante?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Dirección de la empresa</label>
<input type="text" class="form-control" name="Direccion_empresa" value="<?= $datos->Direccion_empresa?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Teléfono</label>
<input type="number" class="form-control" name="Telefono" value="<?= $datos->Telefono?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
<input type="email" class="form-control" name="Correo_electronico" value="<?= $datos->Correo_electronico?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Identificación fiscal</label>
<input type="text" class="form-control" name="Identificacion_fiscal" value="<?= $datos->Identificacion_fiscal?>">

</div>

<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>