<?php
include '../../includes/db.php';

$codigomarca = $_POST["codigomarca"];
$empresa = $_POST["empresa"];
$usuario = $_POST["usuario"];

$sql = "INSERT INTO marca(codigomarca,
empresa,
usuario
)
 VALUES ( 
$codigomarca,
'$empresa',
'$usuario');";
  if ($conn->query($sql) === TRUE) {
  header("Location: ./Index.php");
  exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
