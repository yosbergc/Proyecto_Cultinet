<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre_completo"]) and !empty($_POST["direccion"]) and !empty($_POST["cedula"]) and !empty($_POST["telefono"]) and !empty($_POST["correo_electronico"]) and !empty($_POST["fechaNac"]) and !empty($_POST["funcion"]) and !empty($_POST["genero"]) ) {
        
        $nombre_completo=$_POST["nombre_completo"];
        $direccion=$_POST["direccion"];
        $cedula=$_POST["cedula"];
        $telefono=$_POST["telefono"];
        $correo_electronico=$_POST["correo_electronico"];
        $fechaNac=$_POST["fechaNac"];
        $funcion=$_POST["funcion"];
        $genero=$_POST["genero"];


        $sql=$conexion_SC->query(" INSERT INTO registro_de_jornaleros(nombre_completo,direccion,cedula,telefono,correo_electronico,fechaNac,funcion,genero)VALUE ('$nombre_completo','$direccion','$cedula','$telefono','$correo_electronico','$fechaNac','$funcion','$genero')");
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