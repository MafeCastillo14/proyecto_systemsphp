<?php
include '../../includes/db.php';

if ($_REQUEST['empid']) {
    $idinventario = $_REQUEST['empid'];
    $sql  ="DELETE FROM inventario WHERE idinventario=$idinventario";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Registro Borrado";
        // Header("Location:Index.php");
    }
}

?>