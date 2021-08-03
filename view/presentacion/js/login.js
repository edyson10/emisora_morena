/*
METODO PARA REGISTRAR RUTAS
*/
$(document).ready(function () {
  $("#FormLogin").validate({
    rules: {
      ingresarCorreo: { required: true, number: true },
      ingresarContrasena: { required: true },
    },
    messages: {
      ingresarCorreo: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan números.",
      },
      ingresarContrasena: { required: "Debe de completar los campos." },
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
        ingresarCorreo: $("#ingresarCorreo").val(),
        ingresarContrasena: $("#ingresarContrasena").val(),
        ingresarTipo: $("#ingresarTipo").val(),
      };
      $.ajax({
        url: "model/login.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          console.log(data);
          
        },
      });
    },
  });
});
