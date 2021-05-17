$(document).ready(function () {
    $("#FormEnviarCorreo").on('submit', function (e) {
        e.preventDefault();
        console.log();
        ingresoExitoso("¡Exito!", "Se envio el correo exitosamente.");
        //var datos = $(this).serializeArray();
        /*
        $.ajax({
            url: 'model/registrarViaje.php',
            method: 'post',
            data: datos,
            dataType: "json",
            type: 'POST',
            beforeSend: function () {
                respuestaInfoEspera("Registrando... ¡Espere por favor!");
            },
            success: function (data) {
                if (data.respuesta == 'exito') {
                    ingresoExitoso("¡Exito!", "Se registro correctamente el viaje.");
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                } else {
                    respuestaError("Error!", "Ocurrio un error al registrar el viaje.");
                }
            }
        });*/
    });
});