function eliminarRol(id) {
    Swal.fire({
        title: 'Eliminar',
        text: "¿Seguro que quieres eliminar el rol?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: 'model/eliminar.php',
                data: { eliminar: 'eliminarRol', id: id },
                type: 'POST',
                beforeSend: function () {
                    respuestaInfoEspera("¡Espere por favor!");
                },
                success: function (data) {
                    var resultado = JSON.parse(data);
                    if (resultado.respuesta == 'exito') {
                        Swal.fire(
                            'Eliminado!',
                            'El rol ha sido eliminado.',
                            'success'
                        )
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'No se pudo eliminar!'
                        })
                    }
                }
            });
        }
    })
}