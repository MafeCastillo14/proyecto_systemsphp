<?php
include '../../includes/db.php';
$idcategoria=$_GET['idcategoria'];

$sql="DELETE FROM categoria WHERE idcategoria='$idcategoria'";
 

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>