<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Nombre_empresa_proveedor"]) and !empty($_POST["Nombre_representante"]) and !empty($_POST["Direccion_empresa"]) and !empty($_POST["Telefono"]) and !empty($_POST["Correo_electronico"]) and !empty($_POST["Identificacion_fiscal"]) ) {

        $Nombre_empresa_proveedor=$_POST["Nombre_empresa_proveedor"];
        $Nombre_representante=$_POST["Nombre_representante"];
        $Direccion_empresa=$_POST["Direccion_empresa"];
        $Telefono=$_POST["Telefono"];
        $Correo_electronico=$_POST["Correo_electronico"];
        $Identificacion_fiscal=$_POST["Identificacion_fiscal"];

        $sql=$conexion_RP->query(" update registro_de_proveedor set Nombre_empresa_proveedor='$Nombre_empresa_proveedor', Nombre_representante='$Nombre_representante', Direccion_empresa='$Direccion_empresa', Telefono='$Telefono', Correo_electronico='$Correo_electronico', Identificacion_fiscal='$Identificacion_fiscal' WHERE Nombre_empresa_proveedor='$id' ");
        
        if ($sql==1) {
            header("location:Registro_Proveedores.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>