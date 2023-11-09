<?php
include '../Login/db.php';

session_start();

if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
}

// Procesa el formulario enviado por el usuario y recopila los nuevos datos
$tipoPlatano = $_POST['variedades']; // Asegúrate de que esta variable esté definida en tu formulario
$cantidadPlantada = $_POST['cantidad_siembra'];
$fechaSiembra = $_POST['fecha_siembra'];
$identificador = $_POST['siembraIdentify'];

// Inserta los nuevos datos en la tabla datos_siembra
$insertQuery = "INSERT INTO datos_siembra (usuario_id, tipoPlatano, cantidadPlantada, fechaSiembra, identificadorSiembra) VALUES ($userId, '$tipoPlatano', '$cantidadPlantada', '$fechaSiembra', '$identificador')";
$resultadoInsert = mysqli_query($conexion, $insertQuery);

if ($resultadoInsert) {
    echo "Datos insertados con éxito";
} else {
    echo "Error al insertar los datos: " . mysqli_error($conexion);
}
?>
