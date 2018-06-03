<!--================================================
MODAL AGREGAR CLIENTE
==================================================-->
<div  class="container">

  <div class="box">

    <div class="">

      <form role="form" method="post">

        <div class="box-header" style="background:#3c8dbc; ">

          <h4 class="box-title" style="color:#fafafa;">Agregar cliente</h4>

        </div>

        <div class="box-doby">

          <!-- entrada nombre -->
          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">
                <i class="fa fa-user"></i>
              </span>

              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" autocomplete="off" required>

            </div>

          </div>

          <!-- entrada documento -->
          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">
                <i class="fa fa-address-card"></i>
              </span>

              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar la contraseña" autocomplete="off" required>

            </div>

          </div>

          <!-- entrada celular -->
          <div class="form-group">

            <div class="input-group">

              <span class="input-group-addon">
                <i class="fa fa-mobile"></i>
              </span>

              <input type="email" class="form-control input-lg" name="nuevoCorreo" placeholder="Ingresar tu correo" autocomplete="off" required>

            </div>

          </div>

        </div>

        <div class="box-footer">

          <button type="submit" class="btn btn-primary">Registrar</button>

        </div>

<?php

$crearUsuario = new ControladorFormulario();
$crearUsuario -> ctrCrearUsuario();

?>

      </form>

    </div>

  </div>

</div>
<br>
<!--=====  FIN AGREGAR CLIENTE  ======-->
