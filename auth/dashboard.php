<?php

session_start();

if(!isset($_SESSION['login'])) {

    header("Location: /TugasBesarMIBD/auth/login.php");
    exit();

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

<h3>Selamat datang, <?= $_SESSION['nama']; ?></h3>

<a href="/TugasBesarMIBD/auth/logout.php">
    Logout
</a>

</body>
</html>