<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de registro</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" src="style.css">
</head>

<body style="background-color:beige">
  <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 5%;"> Registro Usuario </h2>
  <br>
  <form action="metodoAdd.php" method="POST" style="width: 50%; margin-left: 25%;">
    <div class="row">

      <div class="col">
        Nombres:
        <input type="text" class="form-control" placeholder="" name="indentificacion">
      </div>
      <div class="col">
        Nombres:
        <input type="text" class="form-control" placeholder="" name="nombres">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Apellidos:
        <input type="text" class="form-control" placeholder="" name="apellidos">
      </div>
      <div class="col">
        Telefono:
        <input type="text" class="form-control" placeholder="" name="telefono">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Correo Electrónico:
        <input type="text" class="form-control" placeholder="" name="correo">
      </div>
      <div class="col">
        Dirección:
        <input type="text" class="form-control" placeholder="" name="direccion">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Tipo Usuario:
        <input type="text" class="form-control" placeholder="" name="tipo_usuario">
      </div>
      <div class="col">
        Contraseña:
        <input type="text" class="form-control" placeholder="" name="contraseña">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Bonificación:
        <input type="text" class="form-control" placeholder="" name="bonificacion">
      </div>
      <div class="col">
        <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;  ">Enviar</button>
      </div>
    </div>
    <br>
  </form>

</body>

</html>