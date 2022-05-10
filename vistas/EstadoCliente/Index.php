<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" src="style.css">
</head>
<body>
<?php
 include '../../includes/db.php';  

?>
<h2> <p class="text-secondary">Estado Cliente</p> </h2>
<br></br>
<a href="Add.php" class="btn btn-success"> Registrar </a>

<br></br>

<table class="table table-striped" style="width 80%">
    <tr class="table-secondary">
        <td> Id </td>
        <td>Nombre</td>   
            
    </tr>
    <?php
     $sql="SELECT * from estado_cliente";
     $result=mysqli_query($conn, $sql);
     while($mostrar=mysqli_fetch_array($result)){
        ?>
    <tr> 
        <td><?php echo $mostrar['idestado_pago']?></td>
        <td><?php echo $mostrar['nombre'] ?></td>     
    <th><a href="Edit.php?idestado_pago=<?php echo $mostrar['idestado_pago']?>" class="btn btn-info">Editar</a>
        <th>
            <a href="Delete.php?idestado_pago=<?php echo $mostrar['idestado_pago'] ?>" class="btn btn-danger">Eliminar</a>
        <th>
    </tr>
    <?php
     }      
    ?>
</table>
</body>
</html>