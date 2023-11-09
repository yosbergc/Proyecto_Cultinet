<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre_empresa_proveedor"]) and !empty($_POST["Nombre_representante"]) and !empty($_POST["Direccion_empresa"]) and !empty($_POST["Telefono"]) and !empty($_POST["Correo_electronico"]) and !empty($_POST["Identificacion_fiscal"]) ) {
        
        $Nombre_empresa_proveedor=$_POST["Nombre_empresa_proveedor"];
        $Nombre_representante=$_POST["Nombre_representante"];
        $Direccion_empresa=$_POST["Direccion_empresa"];
        $Telefono=$_POST["Telefono"];
        $Correo_electronico=$_POST["Correo_electronico"];
        $Identificacion_fiscal=$_POST["Identificacion_fiscal"];


        $sql=$conexion_RP->query(" INSERT INTO registro_de_proveedor(Nombre_empresa_proveedor,Nombre_representante,Direccion_empresa,Telefono,Correo_electronico,Identificacion_fiscal)VALUE ('$Nombre_empresa_proveedor','$Nombre_representante','$Direccion_empresa','$Telefono','$Correo_electronico','$Identificacion_fiscal')");
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