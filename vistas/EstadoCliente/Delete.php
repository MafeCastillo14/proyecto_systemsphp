<?php
include '../../includes/db.php';
$idestado_pago=$_GET['idestado_pago'];

$sql="DELETE FROM estado_cliente WHERE idestado_pago='$idestado_pago'";
 

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>