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

$sql = "UPDATE orden_compra
SET
`numero_compra` = $numero_compra,
`usuario` = $usuario,
`descripcion_producto`= '$descripcion_producto',
`cantidad` = $cantidad,
`unidad_medida` = $unidad_medida,
`valor_unitario` = $valor_unitario,
`valor_total` = $valor_total,
`fecha_registro` ='$fecha_registro'
WHERE `numero_compra`=$numero_compra;
";

$query=mysqli_query($conn,$sql);
echo $sql;

if($query){
Header("Location:Index.php");
}
