<?php

include "modelo/conexion_PC.php";

$id = $_GET["id"];

$sql = $conexion_PC->query(" select * from pagos_compras where Nombre_empresa_proveedor='$id' ");


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
include "controlador/modificar_pc.php"; 
while ($datos = $sql->fetch_object()) { ?>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Nombre de empresa o proveedor</label>
<input type="text" class="form-control" name="Nombre_empresa_proveedor" value="<?= $datos->Nombre_empresa_proveedor?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Monto a pagar</label>
<input type="text" class="form-control" name="Monto_a_pagar" value="<?= $datos->Monto_a_pagar?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Fecha de pago</label>
<input type="date" class="form-control" name="Fecha_de_pago" value="<?= $datos->Fecha_de_pago?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Numero de factura</label>
<input type="number" class="form-control" name="Numero_de_factura" value="<?= $datos->Numero_de_factura?>">

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Metodo de pago</label>
<select class="form-control" name="Metodo_de_pago" value="<?= $datos->Metodo_de_pago?>">
			<option value="">Seleccione...</option>
			<option value="Efectivo">Efectivo</option>
			<option value="Transferencia">Transferencia</option>
			<option value="Pago_movil">Pago móvil</option>
			<option value="Zelle">Zelle</option>
			<option value="Zinli">Zinli</option>
			<option value="Paypal">Paypal</option>
		</select> 

</div>

<div class="mb-3">

<label for="exampleInputEmail1" class="form-label">Descripcion</label>
<input type="text" class="form-control" name="Descripcion" value="<?= $datos->Descripcion?>">

</div>

<div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Categoria de gastos</label>
    <select class="form-control" name="Categoria_de_gastos" value="<?= $datos->Descripcion?>">
      <option value="">Seleccione...</option>
      <option value="Mantenimiento">Mantenimiento</option>
      <option value="Maquinaria">Maquinaria</option>
      <option value="Siembra">Siembra</option>
      <option value="Cosecha">Cosecha</option>
      <option value="Herramientas">Herramientas</option>
    </select>

  </div>

<div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Observaciones</label>
    <input type="text" class="form-control" name="Observaciones" value="<?= $datos->Descripcion?>">

  </div>

<?php }

?>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>


</form>


</body>
</html>