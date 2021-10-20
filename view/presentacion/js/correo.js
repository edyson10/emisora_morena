/*
METODO PARA ENVIAR CORREO DE CONTACTO
*/
$(document).ready(function () {
    $("#FormEnviarCorreo").validate({
      rules: {
        contact_name: { required: true },
        contact_email: { required: true, email: true },
        contact_asunt: { required: true },
        contact_message: { required: true },
      },
      messages: {
        contact_name: { required: "Debe de completar los campos." },
        contact_email: {
          required: "Debe de completar los campos.",
          email: "Solo se aceptan correos.",
        },
        contact_asunt: { required: "Debe de completar los campos." },
        contact_message: { required: "Debe de completar los campos." },
      },
      errorElement: "span",
      errorPlacement: function (error, element) {
        error.addClass("invalid-feedback");
        element.closest(".form-group").append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass("is-invalid");
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass("is-invalid");
      },
      submitHandler: function () {
        var datos = {
          contact_name: $("#contact_name").val(),
          contact_email: $("#contact_email").val(),
          contact_asunt: $("#contact_asunt").val(),
          contact_message: $("#contact_message").val(),
        };
        $.ajax({
          url: "model/registrarContacto.php",
          method: "post",
          data: datos,
          dataType: "json",
          type: "POST",
          beforeSend: function () {
            respuestaInfoEspera("Registrando... ¡Espere por favor!");
          },
          success: function (data) {
            if (data.respuesta == "exito") {
              ingresoExitoso("Exito!", "Se envio correctamente su correo.");
              setTimeout(function () {
                location.reload();
              }, 1000);
            } else {
              respuestaError("Error!", "Ocurrio un error al enviar el correo.");
            }
          },
        });
      },
    });
  });