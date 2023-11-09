<?php

include "./modelo/conexion_PP.php";

if (isset($_SESSION['id'])) {
    // La ID del usuario está en la sesión, por lo que el usuario ha iniciado sesión correctamente
    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['id'];
}
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion_PP->query("DELETE FROM pagos_a_proveedores WHERE Nombre_empresa_proveedor='$id'");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}
?>


