<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Proveedor</title>
    <link rel="icon" type="../../../Favicon.png" href="../../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Registro de Proveedor</h1>  

<?php

include "controlador/eliminar_RP.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_RP.php";
  include "controlador/registro_RP.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Nombre de empresa o proveedor</label>
    <input type="text" class="form-control" name="Nombre_empresa_proveedor">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Nombre representante</label>
    <input type="text" class="form-control" name="Nombre_representante">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Dirección de la empresa</label>
    <input type="text" class="form-control" name="Direccion_empresa">
   
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

    <label for="exampleInputEmail1" class="form-label">Identificación fiscal</label>
    <input type="text" class="form-control" name="Identificacion_fiscal">

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->

<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre de empresa o proveedor</th>
      <th scope="col">Nombre representante</th>
      <th scope="col">Dirección de la empresa</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo electrónico</th>
      <th scope="col">Identificación fiscal</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_RP.php";
    $sql=$conexion_RP->query(" SELECT * FROM registro_de_proveedor");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>

    
      <td><?= $datos->Nombre_empresa_proveedor ?></td>
      <td><?= $datos->Nombre_representante ?></td>
      <td><?= $datos->Direccion_empresa ?></td>
      <td><?= $datos->Telefono ?></td>
      <td><?= $datos->Correo_electronico ?></td>
      <td><?= $datos->Identificacion_fiscal ?></td>

      <td>
        <a href="modificar_RP.php?id=<?= $datos->Nombre_empresa_proveedor ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Registro_Proveedores.php?id=<?= $datos->Nombre_empresa_proveedor ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>

    <?php }
    ?>

  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <br>
    <br>
      <a href="../Registro_Jornaleros/Registro_Jornaleros.php">Atras</a>


  </body>
</html>