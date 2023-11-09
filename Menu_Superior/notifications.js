document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("guardar-perfil").addEventListener("submit", function (event) {
        event.preventDefault(); // Evita que el formulario se envíe normalmente

    // Obtiene los valores de los campos
    var ubicacion = document.getElementById("ubicacion").value;
    var tamanioFinca = document.getElementById("tamanioFinca").value;
    var numeroContacto = document.getElementById("numeroContacto").value;
    var usuarioNacimiento = document.getElementById("usuarioNacimiento").value;

    // Realiza la solicitud AJAX al servidor
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "guardar_perfil.php", true); // Reemplaza con la URL de tu archivo PHP

    // Define el encabezado adecuado para enviar datos POST
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Maneja la respuesta del servidor
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Maneja la respuesta del servidor
            document.getElementById("respuesta").innerHTML = xhr.responseText;
            // Puedes enviar notificaciones o realizar otras acciones personalizadas
        } else {
            // Maneja errores en la solicitud
            document.getElementById("respuesta").innerHTML = "Error en la solicitud.";
        }
    };

    // Envía los datos del formulario al servidor
    var formData = "ubicacion=" + ubicacion + "&tamanioFinca=" + tamanioFinca + "&numeroContacto=" + numeroContacto + "&usuarioNacimiento=" + usuarioNacimiento;
    xhr.send(formData);
});
});