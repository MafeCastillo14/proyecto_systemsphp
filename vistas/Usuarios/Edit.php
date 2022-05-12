<?php
include '../../includes/db.php';

$idcategoria = $_GET['identificacion'];
$sql = "SELECT * from usuarios where identificacion=" . $_GET['identificacion'] . ";";

$query = mysqli_query($conn, $sql);

$mostrar = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" src="style.css">
</head>

<body>

  <body style="background-color:beige">
    <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 10%;"> Editar Categoria </h2>
    <br>
    <form action="metodoUpdate.php" method="POST" style="width: 50%; margin-left: 25%;">
      <div class="row">

        <div class="col">
          Identificación:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['identificacion'] ?>" name="identificacion">
        </div>
        <div class="col">
          Nombres:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['nombres'] ?>" name="nombres">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Apellidos:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['apellidos'] ?>" name="apellidos">
        </div>
        <div class="col">
          Telefono:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['telefono'] ?>" name="telefono">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Correo Electrónico:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['correo'] ?>" name="correo">
        </div>
        <div class="col">
          Dirección:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['direccion'] ?>" name="direccion">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Tipo Usuario:

          <select class="form-control" value="<?php echo $mostrar['tipo_usuario'] ?>" name="tipo_usuario" id="tipo_usuario">
            <option value="1">Administrador</option>
            <option value="2">Vendedor</option>
            <option value="3">Proveedor</option>
            <option value="4">Cliente</option>
          </select>
        </div>
        <div class="col">
          Contraseña:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['contraseña'] ?>" tipo_usuario name="contraseña">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Bonificación:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['bonificacion'] ?>" name="bonificacion">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Actualizar</button>
        </div>
      </div>
      <br>
    </form>
  </body>

</html>