<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre_completo"]) and !empty($_POST["Direccion"]) and !empty($_POST["Cedula"]) and !empty($_POST["Telefono"]) and !empty($_POST["Correo_electronico"]) and !empty($_POST["FechaNac"]) and !empty($_POST["Funcion"]) and !empty($_POST["Genero"]) ) {
        
        $Nombre_completo=$_POST["Nombre_completo"];
        $Direccion=$_POST["Direccion"];
        $Cedula=$_POST["Cedula"];
        $Telefono=$_POST["Telefono"];
        $Correo_electronico=$_POST["Correo_electronico"];
        $FechaNac=$_POST["FechaNac"];
        $Funcion=$_POST["Funcion"];
        $Genero=$_POST["Genero"];


        $sql=$conexion_RJ->query(" INSERT INTO registro_de_jornaleros(Nombre_completo,Direccion,Cedula,Telefono,Correo_electronico,FechaNac,Funcion,Genero)VALUE ('$Nombre_completo','$Direccion','$Cedula','$Telefono','$Correo_electronico','$FechaNac','$Funcion','$Genero')");
        if ($sql==1) {
            echo '<div class="alert alert-success">Registrado con Exito</div>';
        } else {
            echo '<div class="alert alert-danger">Error al Registrar</div>';
            
        }
        

    }else{
        echo '<div class="alert alert-warning">Campos Vacios</div>';
        
    }

}

?>