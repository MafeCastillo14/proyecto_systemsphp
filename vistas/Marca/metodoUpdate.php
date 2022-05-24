<?php
include '../../includes/db.php';

$codigomarca = $_POST['codigomarca'];
echo $codigomarca;
$empresa = $_POST["empresa"];
$usuario = $_POST["usuario"];

$sql = "UPDATE marca
SET
`codigomarca` = $codigomarca,
`empresa` = '$empresa',
`usuario` = '$usuario'
WHERE `codigomarca` = $codigomarca;
";


$query=mysqli_query($conn,$sql);
echo $sql;

if($query){
Header("Location:Index.php");
}
