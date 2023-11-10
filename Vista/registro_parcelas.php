<?php
session_start();
include '../Login/db.php';

if (isset($_SESSION['id'])) {
    // La ID del usuario está en la sesión, por lo que el usuario ha iniciado sesión correctamente
    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['id'];
    // Aquí puedes continuar con el código relacionado con la sesión del usuario
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de Parcela</title>
    <link rel="icon" type="../Favicon.png" href="../Favicon.png">
	<link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="../Menu_Superior/style_cliente.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="registroParcelas.js"></script>
	<script src="obtenerParcelas.js"></script>
</head>
<body>
	<header class="header">
		<div class="partOne">
		<img src="../logo.png" alt="" class="logoImage" href="">
		</div>
			<nav class="menu">
                <a href="Vista_principal.php">Atras</a>
			</nav>
		<div class="user">
			<span class="userName">Bienvenido, <?php echo $_SESSION['Nombre'] ?></span>
		</div>
	</header>
<input type="checkbox" id="btn-menu">
<section>
<div class="user-details" style="margin-top:50px">
<form id="miFormulario">
		<label for="variedades" class="label margin">Tipo de platano</label>
		<input list="variedadList" name="variedades" id="variedades" class="inputProfile" autocomplete="off" required>
		<datalist id="variedadList">
			<option value="Plátano común">
			<option value="Plátano rojo">
			<option value="Plátano macho">
			<option value="Plátano burro">
			<option value="Plátano manzano">
			<option value="Plátano canario">
			<option value="Plátano enano">
			<option value="Plátano de seda">
		</datalist>

		<label for="cantidad_siembra" class="label margin">Cantidad sembrada</label>
        <input type="text" name="cantidad_siembra" id="cantidad_siembra" class="inputProfile" required>

        <label for="fecha_siembra" class="label margin">Fecha de Siembra:</label>
        <input type="date" name="fecha_siembra" id="fecha_siembra" class="inputProfile" required>
        
		<label for="siembraIdentify" class="label margin">Identificador de siembra:</label>
        <input type="text" name="siembraIdentify" id="siembraIdentify" class="inputProfile" required>

        <input type="submit" value="Registrar Parcela" class="profileGuardar">
    </form>
	<div class="mostramosResultados">
	</div>
</div>
<div>
	<h2 style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Eliminar Siembra Existente</h2>
<div class="formularioBorrar">
<form id="formEliminarSiembra">
        <label for="identificadorSiembra">Selecciona el identificador de siembra a eliminar:</label>
		<br>
        <select id="identificadorSiembra" name="identificadorSiembra">
            <?php
            include 'db.php';

            // Consulta SQL para obtener todos los identificadores de siembra
            $query = "SELECT identificadorSiembra FROM datos_siembra";
            $result = mysqli_query($conexion, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['identificadorSiembra'] . "'>" . $row['identificadorSiembra'] . "</option>";
                }
            } else {
                echo "Error en la consulta: " . mysqli_error($conexion);
            }
            ?>
        </select>
		<br>
        <button type="button" id="eliminarSiembraBtn">Eliminar Siembra</button>
    </form>
</div>


    <script>
        $(document).ready(function () {
            $("#eliminarSiembraBtn").on("click", function () {
                var selectedIdentificador = $("#identificadorSiembra").val();

                if (selectedIdentificador) {
                    $.ajax({
                        type: "POST",
                        url: "eliminar_siembra.php",
                        data: {
                            identificadorSiembra: selectedIdentificador
                        },
                        success: function (response) {
                            $("#mensaje").html(response);
							location.reload();
                        },
                        error: function (xhr, status, error) {
                            console.log("Error en la solicitud AJAX: " + status + " - " + error);
                        }
                    });
                } else {
                }
            });
        });
    </script>
</div>
</div>
</section>
</body>
</html>