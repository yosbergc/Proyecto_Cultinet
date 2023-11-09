<?php
include('db.php');

if (isset($_POST['Correo']) && isset($_POST['Contrasena'])) {
    $Correo = $_POST['Correo'];
    $Contrasena = $_POST['Contrasena'];

    // Utilizar consulta preparada para evitar SQL Injection
    $consulta = "SELECT * FROM usuarios WHERE Correo=?";
    $stmt = mysqli_prepare($conexion, $consulta);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $Correo);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        if ($resultado && mysqli_num_rows($resultado) === 1) {
            $usuario = mysqli_fetch_assoc($resultado);
            // Verificar la contraseña (en entorno de prueba, no se utiliza password_verify)
            if ($usuario['Contrasena'] === $Contrasena) {
                // Usuario autenticado correctamente
                session_start();
                $_SESSION['id'] = $usuario['id']; // Aquí guardamos el ID del usuario en la sesión
                $_SESSION['Nombre'] = $usuario['Nombre'];
                header("Location: ../Vista/Vista_principal.php");
                exit;
            } else {
                // Error de autenticación
                header("Location: ../error.html?error=1");
                exit;
            }
        } else {
            // Error en la consulta o usuario no encontrado
            header("Location: ../error.html?error=2");
            exit;
        }

        mysqli_stmt_close($stmt);
    } else {
        // Error en la consulta preparada
        header("Location: ../error.html?error=3");
        exit;
    }
} else {
    // Datos de inicio de sesión faltantes
    header("Location: ../error.html?error=4");
    exit;
}
?>
