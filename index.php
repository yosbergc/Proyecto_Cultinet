<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="Login/login.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>

    <div class="capa"></div>

    <div class="formulario">
        <img src="logo.png" class="logo">
        <h1 class="registro">Bienvenido</h1>

        <form method="POST" action="login/validar.php">

            <div class="nombres">
                <label>Correo</label><br>
                <input type="email" name="Correo" placeholder="Ingrese su correo"><br>
            </div>
            
            <div class="nombres">
                <label>Contraseña</label><br>
                <input type="password" name="Contrasena" placeholder="Ingrese su contraseña"><br>
            </div>
            
            <input class="botonIniciodesesion" type="submit" value="Iniciar">

        </form>
       
    </div>
<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->

</body>
</html>
