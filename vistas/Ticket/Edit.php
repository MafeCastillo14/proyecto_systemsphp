<?php
include '../../includes/db.php';

$nro_ticket = $_GET['nro_ticket'];
$sql = "SELECT * from ticket where nro_ticket=" . $_GET['nro_ticket'] . ";";

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
    <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 10%;"> Editar Ticket </h2>
    <br>
    <form action="metodoUpdate.php" method="POST" style="width: 50%; margin-left: 25%;">
      <div class="row">

        <div class="col">
          Nro Ticket:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['nro_ticket'] ?>" name="nro_ticket">
        </div>
        <div class="col">
          Producto:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['codigo_producto'] ?>" name="codigo_producto">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Cantidad:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['cantidad'] ?>" name="cantidad">
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
          Fecha:
          <input type="date" class="form-control" placeholder="" value="<?php echo $mostrar['fecha'] ?>" name="fecha">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
         Estado Venta:
          <select class="form-control" value="<?php echo $mostrar['estado_venta'] ?>" name="estado_venta" id="estado_venta">
            <option value="1">Paga</option>
            <option value="2">Fiada</option>
             </select>
        </div>
        <div class="col">
          Usuario:
          <select class="form-control" value="<?php echo $mostrar['usuario'] ?>" name="usuario" id="usuario">
            <option value="0">jkj</option>
                       </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Cuenta Cobro:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['numero_cuenta_cobro'] ?>" name="numero_cuenta_cobro">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Actualizar</button>
        </div>
      </div>
      <br>
    </form>
  </body>

</html>