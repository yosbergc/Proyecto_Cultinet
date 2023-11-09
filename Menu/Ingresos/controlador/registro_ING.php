<?php 

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Cliente"]) and !empty($_POST["Peso_en_kg"]) and !empty($_POST["Precio_de_venta_por_kg"]) and !empty($_POST["Total_de_ingresos"]) ) {

        $Cliente=$_POST["Cliente"];
        $Peso_en_kg=$_POST["Peso_en_kg"];
        $Precio_de_venta_por_kg=$_POST["Precio_de_venta_por_kg"];
        $Total_de_ingresos=$_POST["Total_de_ingresos"];

        $sql=$conexion_ING->query(" INSERT INTO ingresos(Cliente,Peso_en_kg,Precio_de_venta_por_kg,Total_de_ingresos)VALUE ('$Cliente','$Peso_en_kg','$Precio_de_venta_por_kg','$Total_de_ingresos')");
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