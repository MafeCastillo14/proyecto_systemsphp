<?php
include '../../includes/db.php';

if ($_REQUEST['empid']) {
    $codigo_producto = $_REQUEST['empid'];
    $sql  ="DELETE FROM producto WHERE codigo_producto=$codigo_producto";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Registro Borrado";
        // Header("Location:Index.php");
    }
}

?>