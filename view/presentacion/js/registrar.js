/*
METODO PARA REGISTRAR PERSONAL
*/
$(document).ready(function () {
  $("#FormRegistroPersonal").on("submit", function (e) {
    e.preventDefault();
    $("#FormRegistroPersonal").validate({
      rules: {
        nombrePersonal: { required: true },
        apellidoPersonal: { required: true },
        documentoPersonal: { required: true, number: true },
        correoPersonal: { email: true },
        passPersonal: { required: true },
        repPassPersonal: { required: true },
      },
      messages: {
        nombrePersonal: { required: "Debe de completar los campos." },
        apellidoPersonal: { required: "Debe de completar los campos." },
        documentoPersonal: {
          required: "Debe de completar los campos.",
          number: "Solo se aceptan numero.",
        },
        correoPersonal: { email: "Solo se aceptan correos." },
        passPersonal: { required: "Debe de completar los campos." },
        repPassPersonal: { required: "Debe de completar los campos." },
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
    });
    var datos = new FormData(this);
    if (document.getElementById("foto").files.length == 0) {
      respuestaError("Error!", "Debe de cargar un foto!");
    } else {
      $.ajax({
        url: "model/registrarPersona.php",
        data: datos,
        type: "post",
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          //console.log(data)
          //var resultado = JSON.parse(data);
          //console.log('->' + resultado.respuesta);
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha subido registrado correctamente el personal."
            );
            setTimeout(function () {
              window.location.href = "Personal";
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
            respuestaError("Error!", "Debe de elegir un tamaño menor a 2MB.");
          }
        },
      });
    }
  });
});

/*
METODO PARA REGISTRAR RUTAS
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
          console.log(data);
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
    $("#FormRegistroNoticia").validate({
      rules: {
        descripcionNoticia: { required: true },
        lugarNoticia: { required: true },
        fechaNoticia: { required: true, date: true },
      },
      messages: {
        descripcionNoticia: { required: "Debe de completar los campos." },
        lugarNoticia: { required: "Debe de completar los campos." },
        fechaNoticia: {
          required: "Debe de completar los campos.",
          date: "Seleccione una fecha correcta.",
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
    });
    var datos = new FormData(this);
    if (document.getElementById("fotoNoticia").files.length == 0) {
      respuestaError("Error!", "Debe de cargar un foto!");
    } else {
      $.ajax({
        url: "model/registrarNoticia.php",
        data: datos,
        type: "post",
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          //console.log(data)
          //var resultado = JSON.parse(data);
          //console.log('->' + resultado.respuesta);
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha registrado correctamente la noticia."
            );
            setTimeout(function () {
              window.location.href = "Ver-noticia";
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al registrar la noticia"
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir una foto con extensión .jpg, .jpeg, .png."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 2MB.");
          }
        },
      });
    }
  });
});

/*
METODO PARA REGISTRAR PROGRAMACION
*/
$(document).ready(function () {
  $("#FormRegistrarProgramacion").validate({
    rules: {
      nombreProgramacion: { required: true }
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
        rol: $("#rol").val(),
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
          console.log(data);
          /*if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se registro correctamente el rol.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al registrar el rol.");
          }*/
        },
      });
    },
  });
});
