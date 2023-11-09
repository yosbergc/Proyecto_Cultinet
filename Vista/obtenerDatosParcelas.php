<?php
include '../Login/db.php';
session_start();
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];

    // Asegúrate de que $userId esté definido
    if ($userId !== null) {
        $query = "SELECT identificadorSiembra, tipoPlatano, cantidadPlantada, fechaSiembra FROM datos_siembra WHERE usuario_id = $userId";
        $result = mysqli_query($conexion, $query);

        $data = array();
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = array(  
                    'tipoPlatano' => $row['tipoPlatano'],
                    'cantidadPlantada' => $row['cantidadPlantada'],
                    'fechaSiembra' => $row['fechaSiembra'],
                    'ID' => $row['identificadorSiembra'], 
                );
            }
        }

        // Configura el encabezado para indicar que es una respuesta JSON
        

        // Devuelve los datos en formato JSON
        echo json_encode($data);
    } else {
        // Manejo de error: $userId no está definido o es nulo
        echo json_encode(['error' => 'Usuario no válido']);
    }
}

?>