<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "login";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
</head>
<body>

    <div class="capa"></div>
    <div class="formulario">
    <img src="../logo.png" class="logo">
        <h1 class="registro">Registrate</h1>

        <form method="post" action="">

            <div class="Nombres">
                <label>Nombre y Apellido</label><br>
                <input type="text" name="Nombre" placeholder="Ingrese su Nombre y Apellido"><br>
            </div>
            
            <div class="Nombres">
                <label>Correo</label><br>
                <input type="email" name="Correo" placeholder="Ingrese su Correo"><br>
            </div>

            <div class="Nombres">
                <label>Contraseña</label><br>
                <input type="password" name="Contrasena" placeholder="Ingrese su Contraseña"><br>
            </div>
            <input class="botonRegistro" type="submit" name="enviar" value="Registrar">

        </form>

        <?php
// Primero, verifica si el formulario se ha enviado (se hizo clic en el botón enviar)
if (isset($_POST['enviar'])) {
    $Nombre = trim($_POST['Nombre']);
    $Correo = trim($_POST['Correo']);
    $Contrasena = trim($_POST['Contrasena']);

    // Luego, verifica si los campos no están vacíos
    if (!empty($Nombre) && !empty($Correo) && !empty($Contrasena)) {

        // Utilizar consulta preparada para evitar SQL Injection
        $insertar = "INSERT INTO usuarios (Nombre, Correo, Contrasena) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conexion, $insertar);
        mysqli_stmt_bind_param($stmt, "sss", $Nombre, $Correo, $Contrasena);

        // Ejecutar la consulta preparada
        $resultado = mysqli_stmt_execute($stmt);

        // Cerrar el statement
        mysqli_stmt_close($stmt);
    } 
}
?>

        <a class="abajo" href="../index.php">Volver</a>
    </div>
</body>
</html>
