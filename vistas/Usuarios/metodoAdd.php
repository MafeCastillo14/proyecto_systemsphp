<?php
include '../../includes/db.php';

$identificacion = $_POST["indentificacion"];
$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$tipo_usuario = $_POST["tipo_usuario"];
$contraseña = $_POST["contraseña"];
$bonificacion = $_POST["bonificacion"];

$sql= "INSERT INTO tipousuario (rol)
SELECT tipo_usuario, 
FROM usuarios
(identificacion,
nombres,
apellidos,
telefono,
correo,
direccion,
tipo_usuario,
contraseña, 
bonificacion
)
 VALUES ( '$identificacion',
'$nombres''$apellidos','$telefono','$correo','$direccion','$tipo_usuario',
'$contraseña','$bonificacion')"; 

if ($conn->query($sql) === TRUE) {
    header("Location: ./Index.php");
    exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>