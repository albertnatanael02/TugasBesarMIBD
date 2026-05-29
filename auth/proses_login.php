<?php

session_start();

include '../config/AdminConnection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = ? AND password = ?";

$params = array($email, $password);

$query = sqlsrv_query($conn, $sql, $params);

if($query === false) {
    die(print_r(sqlsrv_errors(), true));
}

$data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);

if($data) {

    $_SESSION['login'] = true;
    $_SESSION['nama'] = $data['nama'];

    header("Location: /TugasBesarMIBD/pages/dashboard.php");
    exit();

} else {

    echo "Email atau password salah";

}
?>