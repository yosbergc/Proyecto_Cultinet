<?php

include "modelo/conexion_RJ.php";

$id = $_GET["id"];

$sql = $conexion_RJ->query(" select * from registro_de_jornaleros where nombre_completo='$id' ");


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
include "controlador/modificar_rj.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Nombre completo</label>
<input type="text" class="form-control" name="nombre_completo" value="<?= $datos->nombre_completo?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Dirección</label>
<input type="text" class="form-control" name="direccion" value="<?= $datos->direccion?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Cédula</label>
<input type="number" class="form-control" name="cedula" value="<?= $datos->cedula?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Teléfono</label>
<input type="number" class="form-control" name="telefono" value="<?= $datos->telefono?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
<input type="email" class="form-control" name="correo_electronico" value="<?= $datos->correo_electronico?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
<input type="date" class="form-control" name="fechaNac" value="<?= $datos->fechaNac?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Función</label>
<input type="text" class="form-control" name="funcion" value="<?= $datos->funcion?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Genero</label>
<select class="form-control" name="genero" value="<?= $datos->genero?>">
			<option value=""></option>
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
			<option value="39 Tipo de Gays">39 Tipo de Gays</option>
		</select> 

</div>

<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>