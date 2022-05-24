<?php
include '../../includes/db.php';

$codigomarca = $_GET['codigomarca'];
$sql = "SELECT * from marca  where codigomarca=" . $_GET['codigomarca'] . ";";

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
          Codigo Marca:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['codigomarca'] ?>" name="codigomarca">
        </div>
        <div class="col">
          Empresa:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['empresa'] ?>" name="empresa">
        </div>
        </div>
        <div class="row">
        <div class="col">
          Usuario:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['usuario'] ?>" name="usuario">
        </div>     
        <div class="col">
          <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Actualizar</button>
        </div>
      </div>
      <br>
    </form>
  </body>
</html>