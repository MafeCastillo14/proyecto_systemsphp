<?php
include '../../includes/db.php';

$idestado_venta = $_POST["idestado_venta"];
$estado = $_POST["estado"];

$sql = "UPDATE estado_ticket SET idestado_venta='$idestado_venta', estado='$estado' WHERE idestado_venta='$idestado_venta'";

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>