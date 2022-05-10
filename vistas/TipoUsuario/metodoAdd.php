<?php
include '../../includes/db.php';

$idtipoUsuario = $_POST["idtipoUsuario"];
$rol = $_POST["rol"];

$sql = "INSERT INTO tipousuario (idtipoUsuario,
rol) VALUES ( '$idtipoUsuario',
'$rol')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./Index.php");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>