<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos de Proveedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Pagos de Proveedores</h1>  

<?php

include "controlador/eliminar_PP.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_PP.php";
  include "controlador/registro_PP.php";
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

    <label for="exampleInputEmail1" class="form-label">Monto a pagar</label>
    <input type="text" class="form-control" name="Monto_a_pagar">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Fecha de pago</label>
    <input type="date" class="form-control" name="Fecha_de_pago">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Numero de factura</label>
    <input type="number" class="form-control" name="Numero_de_factura">
   
  </div>
  <!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Metodo de pago</label>
    <select class="form-control" name="Metodo_de_pago">
			<option value="">Seleccione...</option>
			<option value="Efectivo">Efectivo</option>
			<option value="Transferencia">Transferencia</option>
			<option value="Pago_movil">Pago móvil</option>
			<option value="Zelle">Zelle</option>
			<option value="Zinli">Zinli</option>
			<option value="Paypal">Paypal</option>
		</select>

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Comentario</label>
    <input type="text" class="form-control" name="Comentario">

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
 
  
<button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Pagar</button>


</form>


<div class="col-8 p-4">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre de empresa o proveedor</th>
      <th scope="col">Monto a pagar</th>
      <th scope="col">Fecha de pago</th>
      <th scope="col">Numero de factura</th>
      <th scope="col">Metodo de pago</th>
      <th scope="col">Comentario</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_PP.php";
    $sql=$conexion_PP->query(" SELECT * FROM pagos_a_proveedores");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>
      <td><?= $datos->Nombre_empresa_proveedor ?></td>
      <td><?= $datos->Monto_a_pagar ?></td>
      <td><?= $datos->Fecha_de_pago ?></td>
      <td><?= $datos->Numero_de_factura ?></td>
      <td><?= $datos->Metodo_de_pago ?></td>
      <td><?= $datos->Comentario ?></td>
      <td>
        <a href="modificar_PP.php?id=<?= $datos->Nombre_empresa_proveedor ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Pago_Proveedores.php?id=<?= $datos->Nombre_empresa_proveedor ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
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
      <br>
      <a href="../Registro_Proveedores/Registro_Proveedores.php">Atras</a>
      

  </body>
</html>