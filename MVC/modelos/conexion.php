<?php

/*/////////////////////////////
CLASE CONEXION
 /////////////////////////////*/
class Conexion {

  static public function conectar() {

    /*
        1° parametro es el tipo de base de datos,
            el host o direccionde la base de datos
            y el nombre de la base de datos.

        2° parametro es el usuario que se conecta a la
            base de datos.

        3° parametro es la constraseña del usuario.
    */

    $conexion = new PDO('mysql:host=localhost;dbname=pbase',
                        'drzioner',
                        'PROYECTO2314');

    $conexion -> exec('set names utf8');

    return $conexion;

  }
  /*//////// FIN CLASE CONEXION ////////*/
}
