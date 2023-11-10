<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Parcela </title>
    <link rel="icon" type="../../Favicon.png" href="../../Favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1fef534ddd.js" crossorigin="anonymous"></script>
</head>
<body>
    
<h1 class="text-center p-2">Registro de Parcela</h1>  

<div class="container-fluid row">

<div class="col-8 p-4">

<table class="table caption-top">
  <h3>Información de la Parcela</h3>
  <thead>
    <tr>
      <th scope="col">Nombre del propietario</th>
      <th scope="col">Nombre de la parcela</th>
      <th scope="col">Direccion de la parcela</th>
      <th scope="col">Numero de telefono fijo</th>
      <th scope="col">Correo electronico</th>
      <th scope="col">Tamaño en hectareas</th>
      <th scope="col">Tipo de suelo</th>
      <th scope="col">Planta de cultivo</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include "modelo/conexion_PARCE.php";
    $sql=$conexion_PARCE->query(" SELECT * FROM registro_de_parcela");
    while ($datos = $sql->fetch_object()) { ?>
    
    <tr>
      <td><?= $datos->Nombre_del_propietario ?></td>
      <td><?= $datos->Nombre_de_la_parcela ?></td>
      <td><?= $datos->Direccion_de_la_parcela ?></td>
      <td><?= $datos->Numero_de_telefono_fijo ?></td>
      <td><?= $datos->Correo_electronico ?></td>
      <td><?= $datos->Tamaño_en_hectareas ?></td>
      <td><?= $datos->Tipo_de_suelo ?></td>
      <td><?= $datos->Planta_de_cultivo ?></td>
      <td>
      </td>
    </tr>

    <?php }
    ?>

</table>
</div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    
    <a href="../../Vista/Vista_principal.php">Atras</a>


  </body>
</html>