<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Nombre_empresa_proveedor"]) and !empty($_POST["Monto_a_pagar"]) and !empty($_POST["Fecha_de_pago"]) and !empty($_POST["Numero_de_factura"]) and !empty($_POST["Metodo_de_pago"]) and !empty($_POST["Comentario"])) {

        $id=$_POST["id"];
        $Nombre_empresa_proveedor=$_POST["Nombre_empresa_proveedor"];
        $Monto_a_pagar=$_POST["Monto_a_pagar"];
        $Fecha_de_pago=$_POST["Fecha_de_pago"];
        $Numero_de_factura=$_POST["Numero_de_factura"];
        $Metodo_de_pago=$_POST["Metodo_de_pago"];
        $Comentario=$_POST["Comentario"];

        $sql=$conexion_PP->query(" update pagos_a_proveedores set Nombre_empresa_proveedor='$Nombre_empresa_proveedor', Monto_a_pagar='$Monto_a_pagar', Fecha_de_pago='$Fecha_de_pago', Numero_de_factura='$Numero_de_factura', Metodo_de_pago='$Metodo_de_pago', Comentario='$Comentario' WHERE Nombre_empresa_proveedor='$id' ");
        
        if ($sql==1) {
            header("location:Pago_Proveedores.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>