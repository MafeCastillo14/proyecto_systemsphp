<?php
include '../../includes/db.php';

if ($_REQUEST['empid']) {
    $nro_ticket = $_REQUEST['empid'];
    $sql  ="DELETE FROM ticket WHERE nro_ticket=$nro_ticket";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "Registro Borrado";
        // Header("Location:Index.php");
    }
}

?>