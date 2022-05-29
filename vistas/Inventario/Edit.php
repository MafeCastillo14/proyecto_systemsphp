<?php
include '../../includes/db.php';

$idinventario = $_GET['idinventario'];
$sql = "SELECT * from inventario where idinventario=" . $_GET['idinventario'] . ";";

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
    <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 10%;"> Editar Inventario </h2>
    <br>
    <form action="metodoUpdate.php" method="POST" style="width: 50%; margin-left: 25%;">
      <div class="row">

        <div class="col">
          Id Inventario:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['idinventario'] ?>" name="idinventario">
        </div>
        <div class="col">
        Stock:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['stock'] ?>" name="stock">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Nro Compra:
          <select class="form-control" value="<?php echo $mostrar['nro_compra'] ?>" name="nro_compra" id="nro_compra">
            <option value="1">1</option>
            </select>  
        </div>
        <div class="col">
          Producto:
          <select class="form-control" value="<?php echo $mostrar['producto'] ?>" name="producto" id="producto">
            <option value="2">2</option>
            </select>  
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Fecha Entrada:
          <input type="date" class="form-control" placeholder="" value="<?php echo $mostrar['fecha_entrada'] ?>" name="fecha_entrada">
        </div>
        <div class="col">
          Ticket:
          <select class="form-control" value="<?php echo $mostrar['ticket'] ?>" name="ticket" id="ticket">
            <option value="1">1</option>
            </select>  
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
           Fecha Salida:
           <input type="date" class="form-control" placeholder="" value="<?php echo $mostrar['fecha_salida'] ?>" name="fecha_salida">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Actualizar</button>
        </div>
      </div>
      <br>
      <br>
    </form>
  </body>

</html>