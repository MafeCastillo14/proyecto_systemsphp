<?php
include '../../includes/db.php';
$idestado_venta=$_GET['idestado_venta'];

$sql="DELETE FROM estado_ticket WHERE idestado_venta='$idestado_venta'";
 

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>