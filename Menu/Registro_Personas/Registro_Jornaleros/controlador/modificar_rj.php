<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["nombre_completo"]) and !empty($_POST["direccion"]) and !empty($_POST["cedula"]) and !empty($_POST["telefono"]) and !empty($_POST["correo_electronico"]) and !empty($_POST["fechaNac"]) and !empty($_POST["funcion"]) and !empty($_POST["genero"]) ) {

        $id=$_POST["id"];
        $nombre_completo=$_POST["nombre_completo"];
        $direccion=$_POST["direccion"];
        $cedula=$_POST["cedula"];
        $telefono=$_POST["telefono"];
        $correo_electronico=$_POST["correo_electronico"];
        $fechaNac=$_POST["fechaNac"];
        $funcion=$_POST["funcion"];
        $genero=$_POST["genero"];

        $sql=$conexion_RJ->query(" update registro_de_jornaleros set nombre_completo='$nombre_completo', direccion='$direccion', cedula='$cedula', telefono='$telefono', correo_electronico='$correo_electronico', fechaNac='$fechaNac', funcion='$funcion', genero='$genero' WHERE nombre_completo='$id' ");
        
        if ($sql==1) {
            header("location:Registro_Jornaleros.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>