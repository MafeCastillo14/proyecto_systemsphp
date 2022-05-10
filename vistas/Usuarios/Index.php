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
    <h2>
        <p class="text-secondary">Usuarios</p>
    </h2>
    <br></br>
    <a href="Add.php" class="btn btn-success"> Registrar </a>

    <br></br>

    <table class="table table-striped" style="width 80%">
        <tr class="table-secondary">
            <td>Identificación </td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Teléfono</td>
            <td>Correo</td>
            <td>Dirección</td>
            <td>Tipo Usuario</td>
            <td>Contraseña</td>
            <td>Bonificación</td>
        </tr>
        <?php


        $sql = "SELECT * from usuarios inner join tipousuario";
        $result = mysqli_query($conn, $sql);
        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $mostrar['identificacion'] ?></td>
                <td><?php echo $mostrar['nombres'] ?></td>
                <td><?php echo $mostrar['apellidos'] ?></td>
                <td><?php echo $mostrar['telefono'] ?></td>
                <td><?php echo $mostrar['correo'] ?></td>
                <td><?php echo $mostrar['direccion'] ?></td>
                <td><?php echo $mostrar['rol'] ?></td>
                <td><?php echo $mostrar['contraseña'] ?></td>
                <td><?php echo $mostrar['bonificacion'] ?></td>
                <th><a href="Edit.php?identificacion=<?php echo $mostrar['identificacion'] ?>" class="btn btn-info">Editar</a>
                <th>
                    <a href="Delete.php?identificacion=<?php echo $mostrar['identificacion'] ?>" class="btn btn-danger">Eliminar</a>
                <th>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
