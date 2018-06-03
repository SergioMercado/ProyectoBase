$(document).ready( function () {

    /*================================================
    data table
    ==================================================*/
    $('.tabla').DataTable();

    /*================================================
    EDITAR USUARIO
    ==================================================*/
    $(".btnEditarUsuario").click(function() {

      let idUsuario = $(this).attr("idUsuario");

      let datos = new FormData();

      datos.append("idUsuario", idUsuario);

      /*================================================
      METODO AJAX
      ==================================================*/
      $.ajax({

        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {

          $("#editarNombre").val(respuesta["nombre"]);

          $("#editarPassword").val(respuesta["password"]);

          $("#editarCorreo").val(respuesta["email"]);

          $("#editarID").val(respuesta["id"]);

        }

      });

    /*====== FIN EDITAR USUARIO ======*/
    })

    /*================================================
    EDITAR USUARIO
    ==================================================*/
    $(".btnEliminarUsuario").click(function() {

      let idUsuario = $(this).attr("idUsuario");

      swal({

         title: "¿Estas seguro de eliminar este usuario?",
         text: "¡Si no es así, lo puedes cancelar!",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         cancelButtonText: "Cancelar",
         confirmButtonText: "¡Si, eliminarlo!"

       }).then((result)=>{

         if (result.value) {

           window.location = "index.php?id="+idUsuario;

         }

       })

  });

} );
