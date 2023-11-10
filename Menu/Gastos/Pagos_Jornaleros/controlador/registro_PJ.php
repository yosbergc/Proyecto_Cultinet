<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre_del_jornalero"]) and !empty($_POST["Fecha_de_pago"]) and !empty($_POST["Hora_y_tarea_trabajada"]) and !empty($_POST["Monto_a_pagar"]) and !empty($_POST["Metodo_de_pago"]) and !empty($_POST["Comentario"])) {

        $Nombre_del_jornalero=$_POST["Nombre_del_jornalero"];
        $Fecha_de_pago=$_POST["Fecha_de_pago"];
        $Hora_y_tarea_trabajada=$_POST["Hora_y_tarea_trabajada"];
        $Monto_a_pagar=$_POST["Monto_a_pagar"];
        $Metodo_de_pago=$_POST["Metodo_de_pago"];
        $Comentario=$_POST["Comentario"];

        $sql=$conexion_PJ->query(" INSERT INTO pagos_a_jornaleros(Nombre_del_jornalero,Fecha_de_pago,Hora_y_tarea_trabajada,Monto_a_pagar,Metodo_de_pago,Comentario)VALUE ('$Nombre_del_jornalero','$Fecha_de_pago','$Hora_y_tarea_trabajada','$Monto_a_pagar','$Metodo_de_pago','$Comentario')");
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