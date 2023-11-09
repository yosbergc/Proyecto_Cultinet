<?php
// Incluye el archivo de conexión a la base de datos
include '../Login/db.php';

// Inicia la sesión
session_start();

if (isset($_SESSION['id'])) {
    // Obtiene el id del usuario de la sesión actual
    $userId = $_SESSION['id'];

    // Consulta la base de datos para obtener la ubicación del usuario
    $query = "SELECT ubicacion FROM usuarios WHERE id = $userId";
    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        $ubicacion = $fila['ubicacion'];
        // $ubicación contiene la ubicación del usuario
    } else {
        // Maneja el caso en el que no se encontró la ubicación del usuario
        echo "Ubicación no encontrada para el usuario.";
    }
} else {
    // Maneja el caso en el que el usuario no está autenticado o la sesión no contiene el id
    echo "El usuario no está autenticado.";
}
?>