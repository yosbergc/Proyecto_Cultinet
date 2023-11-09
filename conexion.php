<?php
$conexion = mysqli_connect("localhost", "root", "", "login");

if (!$conexion) {
    $error = "Error de conexión: " . mysqli_connect_error();
    echo "<h1>" . $error . "</h1>";
    // Opción para imprimir el mensaje en la consola (descomenta esta línea si lo deseas):
    // error_log($error);
}
?>
