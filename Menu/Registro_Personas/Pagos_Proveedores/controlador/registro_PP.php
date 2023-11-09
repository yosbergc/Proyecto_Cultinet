<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre_empresa_proveedor"]) and !empty($_POST["Monto_a_pagar"]) and !empty($_POST["Fecha_de_pago"]) and !empty($_POST["Numero_de_factura"]) and !empty($_POST["Metodo_de_pago"]) and !empty($_POST["Comentario"])) {

        $Nombre_empresa_proveedor=$_POST["Nombre_empresa_proveedor"];
        $Monto_a_pagar=$_POST["Monto_a_pagar"];
        $Fecha_de_pago=$_POST["Fecha_de_pago"];
        $Numero_de_factura=$_POST["Numero_de_factura"];
        $Metodo_de_pago=$_POST["Metodo_de_pago"];
        $Comentario=$_POST["Comentario"];

        $sql=$conexion_PP->query(" INSERT INTO pagos_a_proveedores(Nombre_empresa_proveedor,Monto_a_pagar,Fecha_de_pago,Numero_de_factura,Metodo_de_pago,Comentario)VALUE ('$Nombre_empresa_proveedor','$Monto_a_pagar','$Fecha_de_pago','$Numero_de_factura','$Metodo_de_pago','$Comentario')");
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