<?php
include '../../includes/db.php';

$codigo_producto = $_GET['codigo_producto'];
$sql = "SELECT * from producto where codigo_producto=" . $_GET['codigo_producto'] . ";";

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
          Codigo Producto:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['codigo_producto'] ?>" name="codigo_producto">
        </div>
        <div class="col">
          Descripcion:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['descripcion'] ?>" name="descripcion">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Precio:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['precio'] ?>" name="precio">
        </div>
        <div class="col">
          Cantidad:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['cantidad'] ?>" name="cantidad">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          Categoria:
          <select class="form-control" value="" name="categoria" name="select" id="categoria">
          <option value="47">C-Tecnologia</option>
          <option value="53">A-Comestibles</option>
          <option value="57">B-Aseo</option>
          </select>
        </div>
        <div class="col">
          Marca:
          <select class="form-control" value="" name="marca" name="select" id="marca">
          <option value="1">colombina</option>
          <option value="2">super ricas</option>
          <option value="3">coca cola</option>
          <option value="4"> alpina</option>
          <option value="5">california</option>
          <option value="6">ramo</option>
          <option value="7">familia</option>
          <option value="8">atogrande</option>
          <option value="9">pepsico</option>
          <option value="10">san jorge</option>
          <option value="11">unilever</option>
          <option value="13">bavaria</option>
          <option value="14">jhonson & jhonson</option>
          <option value="15">big cola</option>
         </select>
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
          Fecha Caducidad:
          <input type="text" class="form-control" placeholder="" value="<?php echo $mostrar['fecha_caducidad'] ?>" name="fecha_caducidad">
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