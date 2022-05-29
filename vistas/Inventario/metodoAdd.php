<?php
include '../../includes/db.php';

$idinventario = $_POST["idinventario"];
$stock = $_POST["stock"];
$nro_compra = $_POST["nro_compra"];
$producto = $_POST["producto"];
$fecha_entrada = $_POST["fecha_entrada"];
$ticket = $_POST["ticket"];
$fecha_salida = $_POST["fecha_salida"];

$sql = "INSERT INTO inventario(idinventario,
stock,
nro_compra,
producto,
fecha_entrada,
ticket,
fecha_salida
)
 VALUES ( 
$idinventario,
$stock,
$nro_compra,
$producto,
'$fecha_entrada',
$ticket,
'$fecha_salida');";
  if ($conn->query($sql) === TRUE) {
  header("Location: ./Index.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
