<!DOCTYPE html>


<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proyecto Crud</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  
  
</head>
<body>

<div class="container">

<form action="form.php" method="POST">
  <div class="form-group">
      <label for="usr">Usuario:</label>
      <input type="text" class="form-control" name='usr' id="usr">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name='pwd' id="pwd">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name='email' id="email">
    <input type="hidden" name='insert'>
  </div>
  
  <input type="submit" class="btn btn-primary" value="Enviar">
</form>


</div>

<?php

if(isset($_POST['insert'])){

  $usuario = $_POST['usr'];
  $password= $_POST['pwd'];
  $email = $_POST['email'];

  $conexion = mysql_connect("localhost","root","");
   
  mysql_select_db("proyecto_crud", $conexion);



  

if(  mysql_query("INSERT INTO users (usuario, password, email) VALUES ($usuario, $password, $email)" ) ){
  echo "<h3>Usuario Ingresado Correctamente</h3>";
}

mysql_close($conexion);

}

?>

<br />


<div class="container">

<table class="table table-dark">
    <thead>
      <tr>
        <th>ID</th>
        <th>User</th>
        <th>Password</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    
    <?php
    $con = mysqli_connect("localhost","root","","proyecto_crud") or die ("Error");
    $consulta = "SELECT * FROM users";
    $ejecutar = mysqli_query($con, $consulta);
    $i=0;
    
    while($fila = mysqli_fetch_array ($ejecutar)){
      $id = $fila['id'];
      $usuario = $fila['usuario'];
      $password = $fila['email'];
      $email = $fila['email'];
    
      $i++;
    ?>
   
    <tbody>
      <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $usuario?></td>
        <td><?php echo $password?></td>
        <td><?php echo $email?></td>
        <td><a href = "form.php?editar=<?php echo $id; ?>">Editar</a></td>
        <td><a href = "form.php?borrar=<?php echo $id; ?>">Borrar</a></td>
      </tr>
      
    </tbody>
    <?php }?>

  </table>

</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>