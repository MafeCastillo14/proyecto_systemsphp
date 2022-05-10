<?php
include '../../includes/db.php';

$idestado_pago = $_POST["idestado_pago"];
$nombre = $_POST["nombre"];

$sql = "UPDATE estado_cliente SET idestado_pago='$idestado_pago', nombre='$nombre' WHERE idestado_pago='$idestado_pago'";

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>