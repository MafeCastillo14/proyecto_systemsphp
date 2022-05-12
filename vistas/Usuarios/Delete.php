<?php
include '../../includes/db.php';

if ($_REQUEST['empid']) {
    $identificacion = $_REQUEST['empid'];
    $sql  ="DELETE FROM usuarios WHERE identificacion=$identificacion";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Registro Borrado";
        // Header("Location:Index.php");
    }
}

?>