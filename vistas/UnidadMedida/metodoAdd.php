<?php
include '../../includes/db.php';

$idunidad_medida = $_POST["idunidad_medida"];
$nombre = $_POST["nombre"];

$sql = "INSERT INTO unidad_medida (idunidad_medida,
nombre) VALUES ( '$idunidad_medida',
'$nombre')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Index.php");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>