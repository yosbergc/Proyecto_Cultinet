<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["identificador_de_siembra"]) and !empty($_POST["tipo_de_platano"]) and !empty($_POST["fecha"]) and !empty($_POST["comentario"]) ) {

        $id=$_POST["id"];
        $identificador_de_siembra=$_POST["identificador_de_siembra"];
        $tipo_de_platano=$_POST["tipo_de_platano"];
        $fecha=$_POST["fecha"];
        $comentario=$_POST["comentario"];

        $sql=$conexion_CS->query(" update control_y_seguimiento set identificador_de_siembra='$identificador_de_siembra', tipo_de_platano='$tipo_de_platano', fecha='$fecha', comentario='$comentario' WHERE identificador_de_siembra='$id' ");
        
        if ($sql==1) {
            header("location:Control_Seguimiento.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>