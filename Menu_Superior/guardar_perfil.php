<?php
// Incluye el archivo de conexión a la base de datos
include '../Login/db.php';

// Verifica si se recibieron datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene los datos del formulario
    $ubicacion = $_POST['ubicacion'];
    $tamanioFinca = $_POST['tamanioFinca'];
    $numeroContacto = $_POST['numeroContacto'];
    $usuarioNacimiento = $_POST['usuarioNacimiento'];

    // Obtiene el ID de usuario desde la sesión
    session_start();
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];

        // Actualiza los datos del usuario existente en la base de datos
        $query = "UPDATE usuarios SET ubicacion = '$ubicacion', tamanioFinca = '$tamanioFinca', numeroContacto = '$numeroContacto', usuarioNacimiento = '$usuarioNacimiento' WHERE id = $userId";
        $resultado = mysqli_query($conexion, $query);

        if ($resultado) {
            
        } else {
            // Maneja cualquier error que pueda ocurrir durante la actualización
            
        }
    } else {
        
    }
}
?>