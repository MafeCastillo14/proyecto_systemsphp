<?php
include '../../includes/db.php';

$idcategoria = $_POST["idcategoria"];
$nombre = $_POST["nombre"];

$sql = "INSERT INTO categoria (idcategoria,
nombre) VALUES ( '$idcategoria',
'$nombre')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Index.php");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>