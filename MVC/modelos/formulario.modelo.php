<?php

require_once 'conexion.php';

/*/////////////////////////////
CLASE FORMULARIO
 /////////////////////////////*/
class ModeloFormulario {

  /*funcion crear usuario*/
  static public function mdlCrearUsuario($tabla, $datos) {

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, password, email) VALUES (:nombre, :password, :email)");

    $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);

    $stmt -> bindParam(":password", $datos['password'], PDO::PARAM_STR);

    $stmt -> bindParam(":email", $datos['email'], PDO::PARAM_STR);

    if ($stmt -> execute()) {

      return "ok";

    } else {

      return "error";

    }

    $stmt -> close();

    $stmt = null;

  /*fin funcion crear usuario*/
  }

  /*funcion mostrar usuarios*/
  static public function mdlMostrarUsuarios($tabla, $item, $valor) {

    if ($item == null) {

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

      $stmt -> execute();

      return $stmt -> fetchAll();


    } else {

      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

      $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

      $stmt -> execute();

      return $stmt -> fetch();

    }


    $stmt -> close();

    $stmt = null;

  /*fin funcion mostrar usuarios*/
  }

  /*funcion editar usuario*/
  static public function mdlEditarUsuario($tabla, $datos) {

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, email = :email WHERE id = :id");

    $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);

    $stmt -> bindParam(":password", $datos['password'], PDO::PARAM_STR);

    $stmt -> bindParam(":email", $datos['email'], PDO::PARAM_STR);

    $stmt -> bindParam(":id", $datos['id'], PDO::PARAM_STR);

    if ($stmt -> execute()) {

      return "ok";

    } else {

      return "error";

    }

    $stmt -> close();

    $stmt = null;

  /*fin funcion editar usuario*/
  }

  /*funcion editar usuario*/
  static public function mdlEliminarUsuario($tabla, $datos) {

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

    $stmt -> bindParam(":id", $datos, PDO::PARAM_STR);

    if ($stmt -> execute()) {

      return "ok";

    } else {

      return "error";

    }

    $stmt -> close();

    $stmt = null;

  /*fin funcion editar usuario*/
  }

  /*//////// FIN CLASE FORMULARIO ////////*/
}
