/*
METODO PARA REGISTRAR PERSONAL
*/
$(document).ready(function () {
  $("#FormRegistroPersonal").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData(this);
    if (document.getElementById("foto").files.length == 0) {
      Swal.fire({
        icon: "error",
        title: "¡Ups!",
        text: "No se ha cargado ningún archivo",
      });
    } else {
      $.ajax({
        url: "model/registrarPersona.php",
        data: datos,
        type: 'POST',
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha registrado correctamente el personal."
            );
            setTimeout(function () {
              window.location.href = "Ver-personal";
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al registrar el personal"
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir una foto con extensión .jpg, .jpeg, .png."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 4MB.");
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          } else if (data.respuesta == "docrepetido") {
            respuestaError("Error!", "El documento ya existe, digite otro por favor.");
          } else if (data.respuesta == "nocontrasena") {
            respuestaError("Error!", "Las contraseñas no coinciden.");
          }
        },
      });
    }
  });
});

/*
METODO PARA REGISTRAR ROL
*/
$(document).ready(function () {
  $("#FormRegistrarRol").validate({
    rules: {
      rol: { required: true },
    },
    messages: {
      rol: { required: "Debe de completar los campos." },
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
        rol: $("#rol").val(),
      };
      $.ajax({
        url: "model/registrarRol.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se registro correctamente el rol.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al registrar el rol.");
          }
        },
      });
    },
  });
});

/*
METODO PARA REGISTRAR NOTICIA
*/
$(document).ready(function () {
  $("#FormRegistroNoticia").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData(this);
    if (document.getElementById("fotoNoticia").files.length == 0) {
      Swal.fire({
        icon: "error",
        title: "¡Ups!",
        text: "No se ha cargado ningún archivo",
      });
    } else {
      $.ajax({
        url: "model/registrarNoticia.php",
        data: datos,
        type: $(this).attr("method"),
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha registrado correctamente la noticia."
            );
            setTimeout(function () {
              window.location.href = "Ver-noticia";
            }, 1000);
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          } else if (data.respuesta == "error") {
            respuestaError("Error!", "Error al subir la noticia.");
          } else if (data.respuesta == "noformato") {
            respuestaError("Error!", "Debe de elegir una foto con extensión .jpg, .jpeg, .png.");
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 4MB.");
          }
        },
      });
    }
  });
});

/*
METODO PARA REGISTRAR PROGRAMACIÓN
*/
$(document).ready(function () {
  $("#FormRegistrarProgramacion").validate({
    rules: {
      nombreProgramacion: { required: true },
    },
    messages: {
      nombreProgramacion: { required: "Debe de completar los campos." },
      fechaProgramacion: {
        required: "Debe de completar los campos.",
        date: "Seleccione una fecha correcta.",
      },
      horaProgramacion: {
        required: "Debe de completar los campos.",
        date: "Seleccione una hora correcta.",
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
        nombreProgramacion: $("#nombreProgramacion").val(),
        fechaProgramacion: $("#fechaProgramacion").val(),
        horaProgramacion: $("#horaProgramacion").val(),
      };
      $.ajax({
        url: "model/registrarProgramacion.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "Exito!",
              "Se registro correctamente la programación."
            );
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al registrar.");
          }
        },
      });
    },
  });
});

/*
METODO PARA REGISTRAR PQRS
*/
$(document).ready(function () {
  $("#FormEnviarPQRS").validate({
    rules: {
      tipoPQRS: { required: true },
      nombrePQRS: { required: true },
      numeroPQRS: { required: true, number: true },
      correoPQRS: { required: true },
      descripcionPQRS: { required: true },
    },
    messages: {
      tipoPQRS: { required: "Debe de completar los campos." },
      nombrePQRS: {
        required: "Debe de completar los campos.",
        date: "Seleccione una fecha correcta.",
      },
      numeroPQRS: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numero.",
      },
      correoPQRS: {
        required: "Debe de completar los campos.",
        email: "Solo se aceptan correos.",
      },
      descripcionPQRS: { required: "Debe de completar los campos." },
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
        tipoPQRS: $("#tipoPQRS").val(),
        nombrePQRS: $("#nombrePQRS").val(),
        numeroPQRS: $("#numeroPQRS").val(),
        correoPQRS: $("#correoPQRS").val(),
        descripcionPQRS: $("#descripcionPQRS").val(),
      };
      $.ajax({
        url: "model/registrarPQRS.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se envio correctamente su PQRS.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error el PQRS.");
          }
        },
      });
    },
  });
});

/**
 * METODO PARA REGISTRAR UN COMENTARIO
 */
$(document).ready(function () {
  $("#FormEnviarComentario").validate({
    rules: {
      comentario: { required: true },
    },
    messages: {
      comentario: { required: "Debe de completar los campos." },
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
        comentario: $("#comentario").val(),
      };
      $.ajax({
        url: "model/registrarComentario.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se envio correctamente su comentario.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al enviar su comentario.");
          }
        },
      });
    },
  });
});


