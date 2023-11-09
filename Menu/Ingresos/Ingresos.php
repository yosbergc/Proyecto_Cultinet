<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresos</title>
    <link rel="stylesheet" href="ingresos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
    <!-- ----------------------------------------------------------------------------------------------------------- -->
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="apiclima.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.umd.js"
        integrity="sha512-6HrPqAvK+lZElIZ4mZ64fyxIBTsaX5zAFZg2V/2WT+iKPrFzTzvx6QAsLW2OaLwobhMYBog/+bvmIEEGXi0p1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="graficosObtenidos.js"></script>
 
    <!-- ----------------------------------------------------------------------------------------------------------- -->
    
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- ----------------------------------------------------------------------------------------------------------- -->

  <header class="header">
        <div class="partOne">
            <img src="../../logo.png" alt="" class="logoImage" href="">
        </div>
        <nav class="menu">
            <a href="../../Vista/Vista_principal.php">Atras</a>
        </nav>
        
    </header>

  <!-- ----------------------------------------------------------------------------------------------------------- -->
    
<h1 class="text-center p-2">Registro de Ingresos</h1>  

<?php

include "controlador/eliminar_ING.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_ING.php";
  include "controlador/registro_ING.php";
  ?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Cliente</label>
    <input type="text" class="form-control" name="Cliente">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Peso en kg</label>
    <input type="number" class="form-control" name="Peso_en_kg">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Precio de venta por kg</label>
    <input type="text" class="form-control" name="Precio_de_venta_por_kg">
  
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Total de ingresos</label>
    <input type="text" class="form-control" name="Total_de_ingresos">
   
  </div>

  <!-- ----------------------------------------------------------------------------------------------------------- -->
  
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Peso en kg</th>
      <th scope="col">Precio de venta por kg</th>
      <th scope="col">Total de ingresos</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_ING.php";
    $sql=$conexion_ING->query(" SELECT * FROM ingresos");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>
      <td><?= $datos->Cliente ?></td>
      <td><?= $datos->Peso_en_kg ?></td>
      <td><?= $datos->Precio_de_venta_por_kg ?></td>
      <td><?= $datos->Total_de_ingresos ?></td>
      <td>
        <a href="modificar_ING.php?id=<?= $datos->Cliente ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Ingresos.php?id=<?= $datos->Cliente ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>

    <?php }
    ?>

  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>