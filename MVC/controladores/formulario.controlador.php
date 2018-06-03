<?php

/*/////////////////////////////
CLASE FORMULARIO
 /////////////////////////////*/
class ControladorFormulario {

  /*funcion crear usuario*/
  static public function ctrCrearUsuario() {

    if (isset($_POST["nuevoNombre"])) {

      $tabla = "usuarios";

      $datos = array( 'nombre' => $_POST["nuevoNombre"],
                      'password' => $_POST["nuevoPassword"],
                      'email' => $_POST["nuevoCorreo"]);

      $respuesta = ModeloFormulario::mdlCrearUsuario($tabla, $datos);

      if ($respuesta == "ok") {

          echo '
          <script>
            swal({
              title: "!El usuario se registro correctamente¡",
              type: "success",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result) => {
              if (result.value) {
                window.location = "";
              }
            });
          </script>
          ';

        } else {

          echo '
          <script>
            swal({
              title: "!Ooops ocurrio algun problema, el usuario no se pudo registrar¡",
              type: "error",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result) => {
              if (result.value) {
                window.location = "";
              }
            });
          </script>
          ';

        }

    }

  /*fin funcion crear usuario*/
  }

  /*funcion mostrar usuarios*/
  static public function ctrMostrarUsuarios($item, $valor) {

    $tabla = "usuarios";

    $respuesta = ModeloFormulario::mdlMostrarUsuarios($tabla, $item, $valor);

    return $respuesta;


  /*fin funcion mostrar usuarios*/
  }

  /*funcion editar usuario*/
  static public function ctrEditarUsuario() {

    if (isset($_POST["editarNombre"])) {

      $tabla = "usuarios";

      $datos = array( 'nombre' => $_POST["editarNombre"],
                      'password' => $_POST["editarPassword"],
                      'email' => $_POST["editarCorreo"],
                      'id' => $_POST["editarID"]);

      $respuesta = ModeloFormulario::mdlEditarUsuario($tabla, $datos);

      if ($respuesta == "ok") {

          echo '
          <script>
            swal({
              title: "!El usuario se actualizo correctamente¡",
              type: "success",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result) => {
              if (result.value) {
                window.location = "";
              }
            });
          </script>
          ';

        } else {

          echo '
          <script>
            swal({
              title: "!Ooops ocurrio algun problema, el usuario no se pudo actualizar!",
              type: "error",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result) => {
              if (result.value) {
                window.location = "";
              }
            });
          </script>
          ';

        }

    }

  /*fin funcion editar usuario*/
  }

  /*funcion editar usuario*/
  static public function ctrEliminarUsuario() {

    if (isset($_GET["id"])) {

      $tabla = "usuarios";

      $datos = $_GET["id"];

      $respuesta = ModeloFormulario::mdlEliminarUsuario($tabla, $datos);

      if ($respuesta == "ok") {

          echo '
          <script>
            swal({
              title: "!El usuario se elimino correctamente¡",
              type: "success",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result) => {
              if (result.value) {
                window.location = "index.php";
              }
            });
          </script>
          ';

        } else {

          echo '
          <script>
            swal({
              title: "!Ooops ocurrio algun problema, el usuario no se pudo eliminar!",
              type: "error",
              showConfirmButton: true,
              confirmButtonText: "Cerrar",
              closeOnConfirm: false
            }).then((result) => {
              if (result.value) {
                window.location = "index.php";
              }
            });
          </script>
          ';

        }

    }

  /*fin funcion editar usuario*/
  }

  /*//////// FIN CLASE FORMULARIO ////////*/
}
