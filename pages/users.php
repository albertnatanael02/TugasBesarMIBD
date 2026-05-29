<?php
include "../config/koneksi.php";

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

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

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
        </tr>

    <?php } ?>

</table>

</body>
</html>