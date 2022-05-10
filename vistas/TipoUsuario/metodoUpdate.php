<?php
include '../../includes/db.php';

$idtipoUsuario = $_POST["idtipoUsuario"];
$rol = $_POST["rol"];

$sql = "UPDATE tipousuario SET idtipoUsuario='$idtipoUsuario', rol='$rol' WHERE idtipoUsuario='$idtipoUsuario'";

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>