
<?php
include('bd_index.php');
$Correo=$_POST['Correo'];
$Contrasena=$_POST['Contrasena'];


$consulta="SELECT*FROM usuarios where Correo='$Correo' and Contrasena='$Contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Vista/Vista_principal.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
