<?php
include '../../includes/db.php';

$numero_compra = $_POST["numero_compra"];
$usuario = $_POST["usuario"];
$descripcion_producto = $_POST["descripcion_producto"];
$cantidad = $_POST["cantidad"];
$unidad_medida = $_POST["unidad_medida"];
$valor_unitario = $_POST["valor_unitario"];
$valor_total = $_POST["valor_total"];
$fecha_registro = $_POST["fecha_registro"];


$sql = "INSERT INTO orden_compra(
        numero_compra,
        usuario,
        descripcion_producto,
        cantidad,
        unidad_medida,
        valor_unitario,
        valor_total,
        fecha_registro
      )
      VALUES ( 
        $numero_compra,
        $usuario,
        '$descripcion_producto',
        $cantidad,
        $unidad_medida,
        $valor_unitario,
        $valor_total,
        '$fecha_registro');";
  
  if ($conn->query($sql) === TRUE) {
      header("Location: ./Index.php");
      exit();
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
