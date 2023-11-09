<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["identificador_de_siembra"]) and !empty($_POST["tipo_de_planta"]) and !empty($_POST["fecha"])) {

        $identificador_de_siembra=$_POST["identificador_de_siembra"];
        $tipo_de_planta=$_POST["tipo_de_planta"];
        $fecha=$_POST["fecha"];

        $sql=$conexion_SC->query(" INSERT INTO seguimiento_crecimiento(identificador_de_siembra,tipo_de_planta,fecha)VALUE ('$identificador_de_siembra','$tipo_de_planta','$fecha')");
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