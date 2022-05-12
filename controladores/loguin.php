
<?php
include '../includes/db.php';

if (isset($_POST['username']) && $_POST['username'] && isset($_POST['password']) && $_POST['password']) {

    $sql = "SELECT * FROM usuarios where identificacion =0";
    // $result = mysqli_query($conn, $sql);

    echo json_encode(array('success' => 1));
    // echo json_encode(array('success' => mysqli_fetch_array($result)));
} else {
    $sql = "SELECT * FROM usuarios where identificacion =" . 0;
    $result = mysqli_query($conn, $sql);
    echo json_encode(array('success' => mysqli_fetch_array($result)));
// echo json_encode(array('success' => 0));
}
