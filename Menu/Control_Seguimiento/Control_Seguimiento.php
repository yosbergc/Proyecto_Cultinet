<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control y Seguimiento</title>
    <link rel="icon" type="../../Favicon.png" href="../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Control y Seguimiento</h1>  

<?php

include "controlador/eliminar_CS.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_CS.php";
  include "controlador/registro_CS.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Identificador de siembra</label>
    <input type="text" class="form-control" name="identificador_de_siembra">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Tipo de platano</label>
    <input type="text" class="form-control" name="tipo_de_platano">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Fecha</label>
    <input type="date" class="form-control" name="fecha">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Comentario</label>
    <input type="text" class="form-control" name="comentario">

  </div> 
  <!-- ----------------------------------------------------------------------------------------------------------- -->
   
  
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador de siembra</th>
      <th scope="col">Tipo de platano</th>
      <th scope="col">Fecha</th>
      <th scope="col">Comentario</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_CS.php";
    $sql=$conexion_CS->query(" SELECT * FROM control_y_seguimiento");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>

      <td><?= $datos->identificador_de_siembra ?></td>
      <td><?= $datos->tipo_de_platano ?></td>
      <td><?= $datos->fecha ?></td>
      <td><?= $datos->comentario ?></td>

      <td>
      <a href="modificar_CS.php?id=<?= $datos->identificador_de_siembra ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      <a href="Control_Seguimiento.php?id=<?= $datos->identificador_de_siembra ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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

      <a href="../../Vista/Vista_principal.php">Atras</a>



  </body>
</html>