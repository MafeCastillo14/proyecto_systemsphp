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
        Codigo Marca:
        <input type="text" class="form-control" placeholder="" name="codigomarca">
      </div>
      <div class="col">
        Empresa:
        <input type="text" class="form-control" placeholder="" name="empresa">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        Usuario:
        <input type="text" class="form-control" placeholder="" name="usuario">  
      </div>
            <div class="col">
        <button type="submit" class="btn btn-danger" style="margin-top: 25px; width: 30%;">Guardar</button>
      </div>
    </div>
    <br>
  </form>

</body>

</html>