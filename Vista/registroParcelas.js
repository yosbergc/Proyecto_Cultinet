$(document).ready(function() {
    $("#miFormulario").submit(function(event) {
        // Obtén los datos del formulario
        var formData = $(this).serialize();

        // Realiza una solicitud AJAX al servidor
        $.ajax({
            type: "POST",
            url: "registroParcelasCodigo.php",
            data: formData,
            success: function(response) {
                $("#mensaje").html(response); // Muestra la respuesta en el elemento 'mensaje'
                
                // Recarga la página automáticamente después de 3 segundos
                setTimeout(function() {
                    location.reload();
                }, 3000);
            },
            error: function() {
                $("#mensaje").html("Error al enviar el formulario.");
            }
        });
    });
});
