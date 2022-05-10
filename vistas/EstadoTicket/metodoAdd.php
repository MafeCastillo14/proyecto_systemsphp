<?php
include '../../includes/db.php';

$idestado_venta = $_POST["idestado_venta"];
$estado = $_POST["estado"];

$sql = "INSERT INTO estado_ticket (idestado_venta,
estado) VALUES ( '$idestado_venta',
'$estado')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Index.php");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>