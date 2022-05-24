<?php
include '../../includes/db.php';

$codigo_producto = $_POST["codigo_producto"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$unidad_medida = $_POST["unidad_medida"];
$fecha_caducidad = $_POST["fecha_caducidad"];


$sql = "INSERT INTO producto(
        codigo_producto,
        descripcion,
        precio,
        cantidad,
        categoria,
        marca,
        unidad_medida,
        fecha_caducidad
      )
      VALUES ( 
        $codigo_producto,
        '$descripcion',
        $precio,
        $cantidad,
        $categoria,
        $marca,
        $unidad_medida,
        '$fecha_caducidad');";
  
  if ($conn->query($sql) === TRUE) {
      header("Location: ./Index.php");
      exit();
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
