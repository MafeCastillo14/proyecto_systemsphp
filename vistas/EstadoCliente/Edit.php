<?php
include '../../includes/db.php';

$idestado_pago=$_GET['idestado_pago'];
$sql="SELECT * FROM estado_cliente WHERE idestado_pago='$idestado_pago'";

$query=mysqli_query($conn, $sql);

$mostrar=mysqli_fetch_array($query);

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
    <h2 style=" display: flex; align-content: center; margin-left: 38%; margin-top: 10%;" > Editar Estado Cliente </h2>
    <br> 
        <form action="metodoUpdate.php" method="POST"   style="width: 50%; margin-left: 25%;">
            <div class="row">
              <div class="col">
                Id:
              <input type="text" class="form-control" placeholder="" name="idestado_pago" value="<?php echo $mostrar['idestado_pago']?>">
              </div>
              <div class="col">
                Categoria:
                <input type="text" class="form-control" placeholder=" " name="nombre" value="<?php echo $mostrar['nombre']?>">
              </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-danger" style="margin-top: 25px; margin-left: 44%; width:100px;" >Actualizar</button>
            </div>
          </form>
</body>
</html>