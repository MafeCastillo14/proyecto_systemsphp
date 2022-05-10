<?php
include '../../includes/db.php';

$idcategoria = $_POST["idcategoria"];
$nombre = $_POST["nombre"];

$sql = "UPDATE categoria SET idcategoria='$idcategoria', nombre='$nombre' WHERE idcategoria='$idcategoria'";

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>