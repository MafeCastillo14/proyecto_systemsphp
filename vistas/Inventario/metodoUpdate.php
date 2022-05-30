<?php
include '../../includes/db.php';

$idinventario = $_POST["idinventario"];
$stock = $_POST["stock"];
$nro_compra = $_POST["nro_compra"];
$producto = $_POST["producto"];
$fecha_entrada = $_POST["fecha_entrada"];
$ticket = $_POST["ticket"];
$fecha_salida = $_POST["fecha_salida"];

$sql = "UPDATE inventario
SET
`idinventario` = $idinventario,
`stock` = $stock,
`nro_compra` = $nro_compra,
`producto` = $producto,
`fecha_entrada` = '$fecha_entrada',
`ticket` = $ticket,
`fecha_salida` = '$fecha_salida'
WHERE `idinventario` = $idinventario;
";


$query=mysqli_query($conn,$sql);
echo $sql;

if($query){
Header("Location:Index.php");
}
git config --global user.email "fernanda.castillo.garzon@gmail.com"
git config --global user.name "MafeCastillo14"