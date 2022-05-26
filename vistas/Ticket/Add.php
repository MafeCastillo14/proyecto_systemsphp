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
  <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 5%;"> Registro Ticket </h2>
  <br>
  <form action="metodoAdd.php" method="POST" style="width: 50%; margin-left: 25%;">
    <div class="row">

      <div class="col">
        Nro Ticket:
        <input type="text" class="form-control" placeholder="" name="nro_ticket">
      </div>
      <div class="col">
      Codigo Producto:
      <select class="form-control" value="" name="codigo_producto" name="select" id="codigo_producto">
          <option value="1">Papel Aluminio</option>
          <option value="2">Pony Malta</option>
          </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Cantidad:
        <input type="text" class="form-control" placeholder="" name="cantidad">
      </div>
      <div class="col">
        Valor Unitario:
        <input type="text" class="form-control" placeholder="" name="valor_unitario">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Valor Total:
        <input type="text" class="form-control" placeholder="" name="valor_total">
      </div>
      <div class="col">
      Fecha:
      <input type="date" class="form-control" placeholder="" name="fecha">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
         Estado Venta:
        <select class="form-control" value="" name="estado_venta" name="select" id="estado_venta">
          <option value="1"> Paga</option>
          <option value="2"> Fiada</option>
        </select>
      </div>
      <div class="col">
         Usuario:
         <select class="form-control" value="" name="usuario" name="select" id="usuario">
          <option value="0"> jkj </option>
        </select>
      </div>
    </div>
      <br>
      <br>
      <div class="row">
      <div class="col">
        Nro Cuenta Cobro:
        <input type="text" class="form-control" placeholder="" name="numero_cuenta_cobro">
      </div>
      <div class="col">
        <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Guardar</button>
      </div>
      </div>
    </div>
    </div>
    <br>
  </form>

</body>

</html>