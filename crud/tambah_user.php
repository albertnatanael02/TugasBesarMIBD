<?php
include '../config/AdminConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nama, email) VALUES (?, ?)";

    $params = array($nama, $email);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt) {
        echo "Data berhasil ditambahkan!";
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah User</title>
</head>
<body>

    <h2>Tambah User</h2>

    <form method="POST">

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Simpan</button>

    </form>

</body>
</html>