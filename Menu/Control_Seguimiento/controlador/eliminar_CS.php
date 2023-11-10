<?php

include "./modelo/conexion_CS.php";

if (isset($_SESSION['id'])) {
    // La ID del usuario está en la sesión, por lo que el usuario ha iniciado sesión correctamente
    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['id'];
}
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion_CS->query("DELETE FROM control_y_seguimiento WHERE identificador_de_siembra='$id'");
    if ($sql == 1) {
        echo '<div class="alert alert-success">Campo eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
}
?>
