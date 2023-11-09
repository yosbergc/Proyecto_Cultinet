<?php
include '../Login/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['identificadorSiembra'])) {
    $identificadorSiembra = $_POST['identificadorSiembra'];

    // Consulta SQL para eliminar la siembra
    $query = "DELETE FROM datos_siembra WHERE identificadorSiembra = ?";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $identificadorSiembra);
        if (mysqli_stmt_execute($stmt)) {
            echo "Éxito"; // Devuelve un mensaje de éxito
        } else {
            echo "Error al eliminar la siembra: " . mysqli_error($conexion);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la consulta preparada: " . mysqli_error($conexion);
    }
} else {
    echo "No se proporcionó un identificador de siembra válido.";
}

mysqli_close($conexion);
?>
