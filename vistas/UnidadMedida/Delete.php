<?php
include '../../includes/db.php';
$idunidad_medida=$_GET['idunidad_medida'];

$sql="DELETE FROM unidad_medida WHERE idunidad_medida='$idunidad_medida'";
 

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>