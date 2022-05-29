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
  <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 5%;"> Registro inventario </h2>
  <br>
  <form action="metodoAdd.php" method="POST" style="width: 50%; margin-left: 25%;">
    <div class="row">

      <div class="col">
        Id Inventario:
        <input type="text" class="form-control" placeholder="" name="idinventario">
      </div>
      <div class="col">
        Stock:
        <input type="text" class="form-control" placeholder="" name="stock">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Nro Compra:
        <select class="form-control" value="" name="nro_compra" name="select" id="nro_compra">
          <option value="1">1</option>
          </select>  
      </div>
      <div class="col">
        Producto:
        <select class="form-control" value="" name="producto" name="select" id="producto">
          <option value="2">pony</option>
          </select>        
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Fecha Entrada:
        <input type="date" class="form-control" placeholder="" name="fecha_entrada">
      </div>
      <div class="col">
        Ticket:
        <select class="form-control" value="" name="ticket" name="select" id="ticket">
          <option value="1">1</option>
          </select>        
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
         Fecha Salida:
        <input type="date" class="form-control" placeholder="" name="fecha_salida">
      </div>
      <div class="col">
        <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Guardar</button>
      </div>
      </div>
    <br>
      </form>

</body>

</html>