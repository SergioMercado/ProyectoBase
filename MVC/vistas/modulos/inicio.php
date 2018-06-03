<div class="box-body">

  <table class="table table-bordered table-striped dt-responsive tabla">

    <thead>

      <tr>

        <th style="width:10px;">#</th>
        <th>Nombre</th>
        <th>Contraseña</th>
        <th>Correo</th>
        <th>Fecha</th>
        <th>Acciones</th>

      </tr>

    </thead>

    <tbody>

<?php

$item = null;
$valor = null;

$usuarios = ControladorFormulario::ctrMostrarUsuarios($item, $valor);

foreach ($usuarios as $key => $usuario) {

$num = $key +1;

echo'
<tr>

  <td>'.$num.'</td>
  <td>'.$usuario["nombre"].'</td>
  <td>'.$usuario["password"].'</td>
  <td>'.$usuario["email"].'</td>
  <td>'.$usuario["fecha"].'</td>
  <td>
    <div class="btn-grup">

      <button class="btn btn-warning btn-sm btnEditarUsuario" idUsuario="'.$usuario["id"].'" data-toggle="modal" data-target="#modalEditarUsuario">
        <i class="fas fa-pencil-alt" style="color:white;"></i>
      </button>

      <button class="btn btn-danger btn-sm btnEliminarUsuario" idUsuario="'.$usuario["id"].'">
        <i class="fa fa-times"></i>
      </button>

    </div>
  </td>

</tr>
';
}

?>

    </tbody>

  </table>

</div>

<!--================================================
MODAL EDITAR USUARIO
==================================================-->
<div id="modalEditarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <div class="modal-header" style="background:#3c8dbc; ">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h4 class="modal-title" style="color:#fafafa;">Editar usuario</h4>

        </div>

        <div class="modal-body">

          <div class="box-doby">

            <!-- entrada nombre -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">
                  <i class="fa fa-user"></i>
                </span>

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" placeholder="Ingresa el nuevo nombre" autocomplete="off" required>
                <input type="hidden" id="editarID" name="editarID">

              </div>

            </div>

            <!-- entrada password -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">
                  <i class="fa fa-key"></i>
                </span>

                <input type="text" class="form-control input-lg" id="editarPassword" name="editarPassword" placeholder="Ingresa la nueva contraseña" autocomplete="off" required>

              </div>

            </div>

            <!-- entrada correo -->
            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">
                  <i class="fas fa-at"></i>
                </span>

                <input type="text" class="form-control input-lg" id="editarCorreo" name="editarCorreo" placeholder="Ingresa el nuevo correo" autocomplete="off" required>

              </div>

            </div>

          </div>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>

        </div>

        <?php

          $editarUsuario = new ControladorFormulario();
          $editarUsuario -> ctrEditarUsuario();

        ?>

      </form>

    </div>

  </div>

</div>
<!--=====  FIN MODAL EDITAR USUARIO  ======-->
<?php

  $eliminarUsuario = new ControladorFormulario();
  $eliminarUsuario -> ctrEliminarUsuario();

?>
