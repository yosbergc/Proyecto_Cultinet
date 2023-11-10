<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["identificador_de_siembra"]) and !empty($_POST["tipo_de_platano"]) and !empty($_POST["fecha"]) and !empty($_POST["comentario"]) ) {
        
        $identificador_de_siembra=$_POST["identificador_de_siembra"];
        $tipo_de_platano=$_POST["tipo_de_platano"];
        $fecha=$_POST["fecha"];
        $comentario=$_POST["comentario"];
      
        $sql=$conexion_CS->query(" INSERT INTO control_y_seguimiento(identificador_de_siembra,tipo_de_platano,fecha,comentario)VALUE ('$identificador_de_siembra','$tipo_de_platano','$fecha','$comentario')");
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