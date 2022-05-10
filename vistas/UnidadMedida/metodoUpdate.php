<?php
include '../../includes/db.php';

$idunidad_medida = $_POST["idunidad_medida"];
$nombre = $_POST["nombre"];

$sql = "UPDATE unidad_medida SET idunidad_medida='$idunidad_medida', nombre='$nombre' WHERE idunidad_medida='$idunidad_medida'";

$query=mysqli_query($conn,$sql);
if($query){
Header("Location:Index.php");
}
?>