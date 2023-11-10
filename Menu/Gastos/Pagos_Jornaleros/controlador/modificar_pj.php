<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Nombre_del_jornalero"]) and !empty($_POST["Fecha_de_pago"]) and !empty($_POST["Hora_y_tarea_trabajada"]) and !empty($_POST["Monto_a_pagar"]) and !empty($_POST["Metodo_de_pago"]) and !empty($_POST["Comentario"]) ) {

        $id=$_POST["id"];
        $Nombre_del_jornalero=$_POST["Nombre_del_jornalero"];
        $Fecha_de_pago=$_POST["Fecha_de_pago"];
        $Hora_y_tarea_trabajada=$_POST["Hora_y_tarea_trabajada"];
        $Monto_a_pagar=$_POST["Monto_a_pagar"];
        $Metodo_de_pago=$_POST["Metodo_de_pago"];
        $Comentario=$_POST["Comentario"];

        $sql=$conexion_PJ->query(" update pagos_a_jornaleros set Nombre_del_jornalero='$Nombre_del_jornalero', Fecha_de_pago='$Fecha_de_pago', Hora_y_tarea_trabajada='$Hora_y_tarea_trabajada', Monto_a_pagar='$Monto_a_pagar', Metodo_de_pago='$Metodo_de_pago', Comentario='$Comentario' WHERE Nombre_del_jornalero='$id' ");
        
        if ($sql==1) {
            header("location:Pago_Jornaleros.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>