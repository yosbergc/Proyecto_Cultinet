<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Jornaleros</title>
    <link rel="icon" type="../../../Favicon.png" href="../../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Registro de Jornaleros</h1>  

<?php

include "controlador/eliminar_RJ.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_RJ.php";
  include "controlador/registro_RJ.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
    <input type="text" class="form-control" name="Nombre_completo">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Dirección</label>
    <input type="text" class="form-control" name="Direccion">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Cédula</label>
    <input type="number" class="form-control" name="Cedula">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Teléfono</label>
    <input type="number" class="form-control" name="Telefono">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
    <input type="email" class="form-control" name="Correo_electronico">

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="FechaNac">

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Función</label>
    <input type="text" class="form-control" name="Funcion">

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Genero</label>
    <select class="form-control" name="Genero">
			<option value="">Seleccione...</option>
			<option value="Masculino">Masculino</option>
			<option value="Femenino">Femenino</option>
			<option value="39 Tipo de Gays">39 Tipo de Gays</option>
		</select>

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre completo</th>
      <th scope="col">Dirección</th>
      <th scope="col">Cédula</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo electrónico</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Función</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_RJ.php";
    $sql=$conexion_RJ->query(" SELECT * FROM registro_de_jornaleros");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>
      <td><?= $datos->Nombre_completo ?></td>
      <td><?= $datos->Direccion ?></td>
      <td><?= $datos->Cedula ?></td>
      <td><?= $datos->Telefono ?></td>
      <td><?= $datos->Correo_electronico ?></td>
      <td><?= $datos->FechaNac ?></td>
      <td><?= $datos->Funcion ?></td>
      <td><?= $datos->Genero ?></td>
      <td>
        <a href="modificar_RJ.php?id=<?= $datos->Nombre_completo ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Registro_Jornaleros.php?id=<?= $datos->Nombre_completo ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>

    <?php }
    ?>

  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

      <a href="../../../Vista/Vista_principal.php">Ir a Vista principal</a>
      <br>
      <br>
      <br>
      <a href="../Registro_Proveedores/Registro_Proveedores.php">Registro Proveedores</a>

  </body>
</html>