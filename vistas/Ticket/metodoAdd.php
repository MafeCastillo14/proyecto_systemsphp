<?php
include '../../includes/db.php';

$nro_ticket = $_POST["nro_ticket"];
$codigo_producto = $_POST["codigo_producto"];
$cantidad = $_POST["cantidad"];
$valor_unitario = $_POST["valor_unitario"];
$valor_total = $_POST["valor_total"];
$fecha = $_POST["fecha"];
$estado_venta = $_POST["estado_venta"];
$usuario = $_POST["usuario"];
$numero_cuenta_cobro = $_POST["numero_cuenta_cobro"];


$sql = "INSERT INTO ticket(
        nro_ticket,
      )
      VALUES ( 
        $nro_ticket,
        $codigo_producto,     
        $cantidad,
        $valor_unitario,
        $valor_total,
        '$fecha',
        $estado_venta,
        $usuario,
        $numero_cuenta_cobro);";
  
  if ($conn->query($sql) === TRUE) {
      header("Location: ./Index.php");
      exit();
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
