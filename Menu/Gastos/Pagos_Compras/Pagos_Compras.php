<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos de Compras</title>
    <link rel="icon" type="../../../Favicon.png" href="../../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Pagos de Compras</h1>  

<?php

include "controlador/eliminar_PC.php"; //conexion de eliminar//

?>


<?php 
  include "modelo/conexion_PC.php";
  include "controlador/registro_PC.php";
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

    <label for="exampleInputEmail1" class="form-label">Descripcion</label>
    <input type="text" class="form-control" name="Descripcion">

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Categoria de gastos</label>
    <select class="form-control" name="Categoria_de_gastos">
      <option value="">Seleccione...</option>
      <option value="Mantenimiento">Mantenimiento</option>
      <option value="Maquinaria">Maquinaria</option>
      <option value="Siembra">Siembra</option>
      <option value="Cosecha">Cosecha</option>
      <option value="Herramientas">Herramientas</option>
    </select>

  </div>
<!-- ----------------------------------------------------------------------------------------------------------- -->
  
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Observaciones</label>
    <input type="text" class="form-control" name="Observaciones">

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
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria_de_gastos</th>
      <th scope="col">Observaciones</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include "modelo/conexion_PC.php";
    $sql=$conexion_PC->query(" SELECT * FROM pagos_compras");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>
      <td><?= $datos->Nombre_empresa_proveedor ?></td>
      <td><?= $datos->Monto_a_pagar ?></td>
      <td><?= $datos->Fecha_de_pago ?></td>
      <td><?= $datos->Numero_de_factura ?></td>
      <td><?= $datos->Metodo_de_pago ?></td>
      <td><?= $datos->Descripcion ?></td>
      <td><?= $datos->Categoria_de_gastos ?></td>
      <td><?= $datos->Observaciones ?></td>
      <td>
        <a href="modificar_PC.php?id=<?= $datos->Nombre_empresa_proveedor ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="Pagos_Compras.php?id=<?= $datos->Nombre_empresa_proveedor ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    </tr>

    <?php }
    ?>

  </tbody>
</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


     <a href="../Pagos_Jornaleros/Pago_Jornaleros.php">Pagos Jornaleros</a>
      
      <br>
      <br>
      <br>
      <a href="../../../Vista/Vista_principal.php">Atras</a>
      

  </body>
</html>