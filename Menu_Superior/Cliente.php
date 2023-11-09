<?php
// Incluye el archivo de conexión a la base de datos
include '../Login/db.php';

// Verifica si el usuario ha iniciado sesión y obtén el ID del usuario
session_start();
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];

    // Consulta la base de datos para obtener el correo del usuario
    // Obtenemos el correo
    $sql = "SELECT correo FROM usuarios WHERE id = $userId";
    // Obtenemos la ubicación
    $sql2 = "SELECT ubicacion FROM usuarios WHERE id = $userId";
    // Obtenemos el tamaño de la finca
    $sql3 = "SELECT tamanioFinca FROM usuarios WHERE id = $userId";
    // Obtenemos el número de contacto
    $sql4 = "SELECT numeroContacto FROM usuarios WHERE id = $userId";
    // Obtenemos la fecha de nacimiento
    $sql5 = "SELECT usuarioNacimiento FROM usuarios WHERE id = $userId";
    $result = mysqli_query($conexion, $sql);
    $result2 = mysqli_query($conexion, $sql2);
    $result3 = mysqli_query($conexion, $sql3);
    $result4 = mysqli_query($conexion, $sql4);
    $result5 = mysqli_query($conexion, $sql5);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $correo = $row['correo'];
        
    }
    if ($result2) {
        $row = mysqli_fetch_assoc($result2);
        $ubicacion = $row['ubicacion'];
    }
    if ($result3) {
        $row = mysqli_fetch_assoc($result3);
        $tamanioFinca = $row['tamanioFinca'];
    }
    if ($result4) {
        $row = mysqli_fetch_assoc($result4);
        $numeroContacto = $row['numeroContacto'];
    }
    if ($result5) {
        $row = mysqli_fetch_assoc($result5);
        $usuarioNacimiento = $row['usuarioNacimiento'];
    } else {

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_cliente.css">
    <link rel="stylesheet" href="../Vista/estilos.css">
    <title>Cliente</title>
    <script src="notifications.js"></script>
</head>
<body>
<header class="header">
    <div class="partOne">
    <img src="../logo.png" alt="" class="logoImage">
    </div>
        <nav class="menu">

            <a href="../index.php">Salir</a>
            <a href="../Menu_Superior/Contacto.php">Contacto</a>
	        <a href="../Vista/Vista_principal.php">Atras</a>

        </nav>
    <div class="user">
    <span class="userName">Bienvenido, <?php echo $_SESSION['Nombre'] ?></span>
    </div>
</header>
<div class="profilePage">
<section class="photos"><img src="../Vista/img/profilePhoto.webp" class="profilePhoto_user">
    <br>
    <p class="title"><?php echo $_SESSION['Nombre'] ?></p></section>
<section class="user-details">
    <p class="label">Email:</p>
    <p class="info"><?php echo $correo?></p>
    
    <form id="guardar-perfil">
    <p class="label">Ciudad:</p>
    <input name="ubicacion" id="ubicacion" placeholder="<?php echo $ubicacion ?>" class="inputProfile" required>
    <p class="label">Tamaño de la finca/parcela (hectáreas)</p>
    <input type="text" name="tamanioFinca" class="inputProfile" id="tamanioFinca" placeholder="<?php echo $tamanioFinca ?>" required>
    <p class="label">Número de contacto</p>
    <input type="text" name="numeroContacto" id="numeroContacto" class="inputProfile" placeholder="<?php echo $numeroContacto ?>" required>
    <p class="label">Fecha de nacimiento</p>
    <input type="text" name="usuarioNacimiento" id="usuarioNacimiento" class="inputProfile" placeholder="<?php echo $usuarioNacimiento ?>" required>
    <input type="submit" value="Guardar cambios" class="profileGuardar">
    </form>
</section>
<div id="respuesta"></div>
</div>




</body>
</html>