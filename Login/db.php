<?php
$conexion = mysqli_connect("localhost", "root", "", "login");

if (!$conexion) {
    // Error de conexión
    $error = "Error de conexión: " . mysqli_connect_error();
    // Redireccionar a una página de error personalizada
    header("Location: error.php?mensaje=" . urlencode($error));
    exit;
}
function obtenerCorreoUsuario($conn, $userId) {
    $sql = "SELECT correo FROM usuarios WHERE id = $userId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['correo'];
    } else {
        return false; // Maneja el error apropiadamente en lugar de retornar 'false'
    }
}
?>