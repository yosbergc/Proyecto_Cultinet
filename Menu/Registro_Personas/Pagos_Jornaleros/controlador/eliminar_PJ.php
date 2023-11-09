<?php

include "./modelo/conexion_PJ.php";

if (isset($_SESSION['id'])) {
    // La ID del usuario está en la sesión, por lo que el usuario ha iniciado sesión correctamente
    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['id'];
}
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion_PJ->query("DELETE FROM pagos_a_jornaleros WHERE Nombre_del_jornalero='$id'");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Persona eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}
?>


