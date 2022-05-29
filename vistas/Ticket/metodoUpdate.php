<?php
include '../../includes/db.php';

$nro_ticket = $_POST["nro_ticket"];
$codigo_producto = $_POST["codigo_producto"];
$cantidad = $_POST["cantidad"];
$valor_unitario = $_POST["valor_unitario"];
$valor_total = $_POST["valor_total"];
$fecha = $_POST["fecha"];
$estado_venta = $_POST["estado_venta"];
$usuario = $_POST['usuario'];
$numero_cuenta_cobro = $_POST['numero_cuenta_cobro'];

$sql = "UPDATE ticket
SET
`nro_ticket` = $nro_ticket,
`codigo_producto` = $codigo_producto,
`cantidad` = $cantidad,
`valor_unitario` = $valor_unitario,
`valor_total` = $valor_total,
`fecha` = '$fecha',
`estado_venta` = $estado_venta,
`usuario` = $usuario,
`numero_cuenta_cobro` = $numero_cuenta_cobro
WHERE `nro_ticket` = $nro_ticket;
";


$query=mysqli_query($conn,$sql);
echo $sql;

if($query){
Header("Location:Index.php");
}
