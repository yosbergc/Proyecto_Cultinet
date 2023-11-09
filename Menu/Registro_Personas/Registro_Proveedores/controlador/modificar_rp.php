<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["identificador_de_siembra"]) and !empty($_POST["tipo_de_planta"]) and !empty($_POST["fecha"]) ) {

        $id=$_POST["id"];
        $identificador_de_siembra=$_POST["identificador_de_siembra"];
        $tipo_de_planta=$_POST["tipo_de_planta"];
        $fecha=$_POST["fecha"];

        $sql=$conexion_SC->query(" update seguimiento_crecimiento set identificador_de_siembra='$identificador_de_siembra', tipo_de_planta='$tipo_de_planta', fecha='$fecha' WHERE identificador_de_siembra='$id' ");
        
        if ($sql==1) {
            header("location:Seguimiento_Crecimiento.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>