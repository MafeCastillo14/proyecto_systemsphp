<?php
include '../../includes/db.php';

if ($_REQUEST['empid']) {
    $numero_compra = $_REQUEST['empid'];
    $sql  ="DELETE FROM orden_compra WHERE numero_compra=$numero_compra";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Registro Borrado";
        // Header("Location:Index.php");
    }
}

?>