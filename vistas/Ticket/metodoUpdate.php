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

$sql = "UPDATE producto
SET
`codigo_producto` = $codigo_producto,
`descripcion` = '$descripcion',
`precio` = $precio,
`cantidad` = $cantidad,
`categoria` = $categoria,
`marca` = $marca,
`unidad_medida` = $unidad_medida,
`fecha_caducidad` ='$fecha_caducidad'
WHERE `codigo_producto`=$codigo_producto;
";

$query=mysqli_query($conn,$sql);
echo $sql;

if($query){
Header("Location:Index.php");
}
