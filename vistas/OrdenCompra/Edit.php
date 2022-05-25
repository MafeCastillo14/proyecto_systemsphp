<?php
include '../../includes/db.php';

$numero_compra = $_GET['numero_compra'];
$sql = "SELECT * from orden_compra where numero_compra=" . $_GET['numero_compra'] . ";";

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
    <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 10%;"> Editar Producto </h2>
    <br>
    <form action="metodoUpdate.php" method="POST" style="width: 50%; margin-left: 25%;">
      <div class="row">

        <div class="col">
          Número Compra:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['numero_compra'] ?>" name="numero_compra">
        </div>
        <div class="col">
          Usuario:
          <select class="form-control" value="" name="usuario" name="select" id="usuario">
          <option value="0"> jkj kjkn</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
        Descripción Producto:
        <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['descripcion_producto'] ?>" name="descripcion_producto">
        </div>
        <div class="col">
          Cantidad:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['cantidad'] ?>" name="cantidad">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Unidad Medida:
          <select class="form-control" value="" name="unidad_medida" name="select" id="unidad_medida">
          <option value="1"> Gramos</option>
          <option value="2"> Libra</option>
          <option value="3"> Kilo</option>
          <option value="4"> Botella 3 litros</option>
          <option value="11"> Paca x 18 unidades</option>
          <option value="13"> Caja x 24 unidades</option>
         </select>
        </div>
        <div class="col">
          Valor Unitario:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['valor_unitario'] ?>" name="valor_unitario">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Valor Total:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['valor_total'] ?>" name="valor_total">
        </div>
        <div class="col">
          Fecha Registro:
          <input type="date" class="form-control" placeholder="" value="<?php echo $mostrar['fecha_registro'] ?>" name="fecha_registro">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Actualizar</button>
        </div>
      </div>
      <br>
    </form>
  </body>

</html>