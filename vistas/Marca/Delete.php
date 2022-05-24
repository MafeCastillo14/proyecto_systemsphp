<?php
include '../../includes/db.php';

if ($_REQUEST['empid']) {
    $codigomarca = $_REQUEST['empid'];
    $sql  ="DELETE FROM marca WHERE codigomarca=$codigomarca";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Registro Borrado";
        // Header("Location:Index.php");
    }
}

?>