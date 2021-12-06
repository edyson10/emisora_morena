/*
METODO PARA ENVIAR CORREO DE CONTACTO

$(document).ready(function () {
  $('#FormEnviarCorr').validate({
    rules: {
      contact_name: {required: true},
      contact_email: {required: true, email: true},
      contact_asunt: {required: true},
      contact_message: {required: true}
    },
    messages: {
      contact_name: {required: 'Debe de completar los campos.'},
      contact_email: {
        required: 'Debe de completar los campos.',
        email: 'Solo se aceptan correos.'
      },
      contact_asunt: {required: 'Debe de completar los campos.'},
      contact_message: {required: 'Debe de completar los campos.'}
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function () {
      var datos = {
        contact_name: $('#contact_name').val(),
        contact_email: $('#contact_email').val(),
        contact_asunt: $('#contact_asunt').val(),
        contact_message: $('#contact_message').val()
      };
      $.ajax({
        url: 'model/registrarContacto.php',
        method: 'post',
        data: datos,
        dataType: 'json',
        type: 'POST',
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        beforeSend: function () {
          respuestaInfoEspera('Registrando... ¡Espere por favor!');
        },
        success: function (data) {
          console.log(data);
          if (data.respuesta == 'exito') {
            ingresoExitoso('Exito!', 'Se envio correctamente su correo.');
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError('Error!', 'Ocurrio un error al enviar el correo.');
          }
        }
      });
    }
  });
});*/

$(document).ready(function () {
  $("#FormEnviarCorreo").on("submit", function (e) {
    e.preventDefault();
    if (document.getElementById("contact_file").files.length == 0) {
      console.log("Entre aqui");
      var datos = {
        contact_name: $('#contact_name').val(),
        contact_email: $('#contact_email').val(),
        contact_asunt: $('#contact_asunt').val(),
        contact_message: $('#contact_message').val()
      };
      $.ajax({
        url: "model/registrarContacto.php",
        data: datos,
        type: 'POST',
        dataType: "json",
        success: function (data) {
          console.log(data)
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha enviado correctamente el correo."
            );
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al enviar el correo."
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir un formato correcto."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 40MB.");
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          }
        },
      });
    } else {
      var datos = new FormData(this);
      $.ajax({
        url: "model/registrarContacto.php",
        data: datos,
        type: 'POST',
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function (data) {
          console.log(data)
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha registrado correctamente el usuario."
            );
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al registrar el usuario"
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir una foto con extensión .jpg, .jpeg, .png."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 40MB.");
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          } 
        },
      });
    }
  });
});
