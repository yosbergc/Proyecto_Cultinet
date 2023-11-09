<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Nombre_completo"]) and !empty($_POST["Direccion"]) and !empty($_POST["Cedula"]) and !empty($_POST["Telefono"]) and !empty($_POST["Correo_electronico"]) and !empty($_POST["FechaNac"]) and !empty($_POST["Funcion"]) and !empty($_POST["Genero"]) ) {

        $id=$_POST["id"];
        $Nombre_completo=$_POST["Nombre_completo"];
        $Direccion=$_POST["Direccion"];
        $Cedula=$_POST["Cedula"];
        $Telefono=$_POST["Telefono"];
        $Correo_electronico=$_POST["Correo_electronico"];
        $FechaNac=$_POST["FechaNac"];
        $Funcion=$_POST["Funcion"];
        $Genero=$_POST["Genero"];

        $sql=$conexion_RJ->query(" update registro_de_jornaleros set Nombre_completo='$Nombre_completo', Direccion='$Direccion', Cedula='$Cedula', Telefono='$Telefono', Correo_electronico='$Correo_electronico', FechaNac='$FechaNac', Funcion='$Funcion', Genero='$Genero' WHERE Nombre_completo='$id' ");
        
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