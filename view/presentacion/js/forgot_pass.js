$(document).ready(function () {
  $("#FormRecuperarPass").validate({
    rules: {
        emailForgot: { required: true, email: true },
    },
    messages: {
        emailForgot: {
        required: "Debe de completar los campos.",
        email: "Solo se aceptan correos.",
      },
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
        emailForgot: $("#emailForgot").val(),
      };
      $.ajax({
        url: "model/forgot_password.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Enviando correo... ¡Espere por favor!");
        },
        success: function (data) {
            console.log(data)
          if (data.respuesta == "exito") {
            ingresoExitoso("¡Exito!", "Se envió una contraseña de recuperación a su correo.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError("Error!", "Ocurrio un error al recuperar la contraseña.");
          } else if (data.respuesta == "nonadie") {
            respuestaError("Error!", "No existe un usuario registrado con ese correo.");
          }
        },
      });
    },
  });
});
