<?php

require_once '../controladores/formulario.controlador.php';

require_once '../modelos/formulario.modelo.php';

/*/////////////////////////////
CLASE PLANTILLA
 /////////////////////////////*/
class AjaxUsuarios {

  public $idUsuario;

  public function ajaxEditarUsuario() {

    $item = "id";

    $valor = $this -> idUsuario;

    $respuesta = ControladorFormulario::ctrMostrarUsuarios($item, $valor);

    echo json_encode($respuesta);

  }

/*//////// FIN CLASE PLANTILLA ////////*/
}

/*================================================
EJECUTANDO EL METODO AJAX DE EDITAR USUARIO
==================================================*/

if (isset($_POST["idUsuario"])) {

  $editar = new AjaxUsuarios();

  $editar -> idUsuario = $_POST["idUsuario"];

  $editar -> ajaxEditarUsuario();

}
