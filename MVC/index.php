<?php

require_once 'controladores/plantilla.controlador.php';
require_once 'controladores/formulario.controlador.php';

require_once 'modelos/formulario.modelo.php';

$pagina =  new ControladorPlantilla();

$pagina -> ctrPlantilla();
