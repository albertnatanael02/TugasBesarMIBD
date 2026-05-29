<?php

include '../config/AdminConnection.php';

// Query SQL
$sql = "SELECT * FROM users";

// Jalankan query
$query = sqlsrv_query($conn, $sql);

if ($query === false) {
    die(print_r(sqlsrv_errors(), true));
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Users</title>
</head>
<body>

<h1>Data Users</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>

    <?php while($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>