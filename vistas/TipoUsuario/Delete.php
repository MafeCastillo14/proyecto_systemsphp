<?php
include '../../includes/db.php';
$idtipoUsuario=$_GET['idtipoUsuario'];

$sql="DELETE FROM tipousuario WHERE idtipoUsuario='$idtipoUsuario'";
 

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>