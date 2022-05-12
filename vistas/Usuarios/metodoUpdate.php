<?php
include '../../includes/db.php';

$identificacion = $_POST["identificacion"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$tipo_usuario = $_POST["tipo_usuario"];
$contraseña = $_POST['contraseña'];
$bonificacion = $_POST['bonificacion'];

$sql = "UPDATE usuarios
SET
`identificacion` = $identificacion,
`nombres` = '$nombres',
`apellidos` = '$apellidos',
`telefono` = '$telefono',
`correo` = '$correo',
`direccion` = '$direccion',
`tipo_usuario` = $tipo_usuario,
`contraseña` = '$contraseña',
`bonificacion` = $bonificacion
WHERE `identificacion` = $identificacion;
";


$query=mysqli_query($conn,$sql);
echo $sql;

if($query){
Header("Location:Index.php");
}
