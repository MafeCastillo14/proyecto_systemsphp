<?php
include '../../includes/db.php';

$idestado_pago = $_POST["idestado_pago"];
$nombre = $_POST["nombre"];

$sql = "INSERT INTO estado_cliente (idestado_pago,
nombre) VALUES ( '$idestado_pago',
'$nombre')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Index.php");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>