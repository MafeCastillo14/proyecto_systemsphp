<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" src="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
</head>

<body>
    <?php
    include '../../includes/db.php';
    include '../../layaut.php';
    ?>
    <div id="tabla">
        <h2>
            <p class="text-secondary">Marca</p>
        </h2>
        <br></br>
        <a href="Add.php" class="btn btn-success"> Registrar </a>

        <br></br>

        <table class="table table-striped" style="width:80%">
            <tr class="table-secondary">
                <td>Codigo Marca </td>
                <td>Empresa</td>
                <td>Usuario</td>
            </tr>
            <?php
            $sql = "SELECT * from marca inner join usuarios on marca.usuario = usuarios.identificacion";
            $result = mysqli_query($conn, $sql);
            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['codigomarca'] ?></td>
                    <td><?php echo $mostrar['empresa'] ?></td>
                    <td><?php echo $mostrar['usuario'] ?></td>
                    <th><a href="Edit.php?codigomarca=<?php echo $mostrar['codigomarca'] ?>" class="btn btn-info">Editar</a>
                    <th>
                    <a data-emp-id="<?php echo $mostrar["codigomarca"]; ?>" class="btn btn-danger delete_employee" href="javascript:void(0)">Eliminar</a>
                    <th>

                </tr>
                <?php
            }
            ?>       
             </table>
    </div>
</body>
<script>
    document.getElementById('tabla').style.display = window.localStorage.getItem('sesion') === 'true' ? "" : "none";


    $(document).ready(function() {
        $('.delete_employee').click(function(e) {
            e.preventDefault();
            var empid = $(this).attr('data-emp-id');
            var parent = $(this).parent("td").parent("tr");
            bootbox.dialog({
                message: "Estas seguro que quieres borrarlo ?",
                title: "<i class='glyphicon glyphicon-trash'></i> Borrar !",
                buttons: {
                    success: {
                        label: "No",
                        className: "btn-success",
                        callback: function() {
                            $('.bootbox').modal('hide');
                        }
                    },
                    danger: {
                        label: "Borrar!",
                        className: "btn-danger",
                        callback: function() {
                            $.ajax({
                                    type: 'POST',
                                    url: 'Delete.php',
                                    data: 'empid=' + empid
                                })
                                .done(function(response) {
                                    bootbox.alert(response);
                                    parent.fadeOut('slow');
                                })
                                .fail(function() {
                                    bootbox.alert('Error....');
                                })
                        }
                    }
                }
            });
        });
    });
</script>

</html>