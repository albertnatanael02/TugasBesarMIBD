<?php

include '../config/AdminConnection.php';

if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = ?";

    $params = array($id);

    $query = sqlsrv_query($conn, $sql, $params);

    if($query) {

        header("Location: ../pages/usersLocal.php");
        exit();

    } else {

        die(print_r(sqlsrv_errors(), true));

    }
}
?>