<?php 

if (!empty($_POST["btnregistrar"])) {
    
    if (!empty($_POST["Cliente"]) and !empty($_POST["Peso_en_kg"]) and !empty($_POST["Precio_de_venta_por_kg"]) and !empty($_POST["Total_de_ingresos"]) ) {

        $Cliente=$_POST["Cliente"];
        $Peso_en_kg=$_POST["Peso_en_kg"];
        $Precio_de_venta_por_kg=$_POST["Precio_de_venta_por_kg"];
        $Total_de_ingresos=$_POST["Total_de_ingresos"];

        $sql=$conexion_ING->query(" update ingresos set Cliente='$Cliente', Peso_en_kg='$Peso_en_kg', Precio_de_venta_por_kg='$Precio_de_venta_por_kg', Total_de_ingresos='$Total_de_ingresos' WHERE Cliente='$id' ");
        
        if ($sql==1) {
            header("location:Ingresos.php");
        } else {
            echo"<div class='alert alert-danger'>Error al Modificar</div>";
            
        }
        
    }else{
        echo"<div class='alert alert-warning'>Campo Vacio</div>";
    }
}

?>